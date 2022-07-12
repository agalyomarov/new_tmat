<?php

namespace App\Http\Controllers;

use App\Models\BalanceHistory;
use App\Models\Client;
use App\Models\Dealer;
use App\Models\Packet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacketController extends Controller
{
    public function index(Client $client)
    {
        // dd($client);
        $dealer = Dealer::where('login', session('login'))->first();
        $packets = Packet::all();
        return view('packet', compact('dealer', 'packets', 'client'));
    }

    public function store(Client $client, Request $request)
    {
        try {
            $dealer = Dealer::where('login', session('login'))->first();
            $data = $request->all();
            $startTime = time();
            $endTime = Carbon::parse($data['data2'])->timestamp;
            $different = $endTime - $startTime;
            $different = (int)($different / 3600 / 24);
            $packets = Packet::whereIn('id', $data['packets'])->get();
            $totalPrice = 0;
            foreach ($packets as $packet) {
                $totalPrice += (float)$packet->price;
            }
            $priceForDay = (float)$totalPrice / 30;
            $pricePackets = $priceForDay * $different;
            if ($dealer->balance < $pricePackets) {
                return redirect()->route('dealer.index');
            };
            DB::beginTransaction();
            foreach ($packets as $packet) {
                DB::table('client_packets')->insert(['dealer_id' => $dealer->id, 'client_id' => $client->id, 'packet_id' => $packet->id, 'end_date' => $data['data2']]);
                BalanceHistory::create(['dealer_id' => $dealer->id, 'date' => Carbon::now(), 'price' => '-' . $packet->price, 'action' => 'Куплен пакет: ' . $packet->title, 'client' => $client->login]);
            }
            $dealer->balance = round($dealer->balance - $pricePackets, 2);
            $dealer->save();
            DB::commit();
            return redirect()->route('dealer.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('dealer.index');
        }
    }
    public function stop($client_packet, Request $request)
    {
        try {
            $dealer = Dealer::where('login', session('login'))->first();
            $client_packet = DB::table('client_packets')->where(['client_packets.id' => $client_packet, 'client_packets.dealer_id' => $dealer->id])->leftJoin('packets', 'client_packets.packet_id', '=', 'packets.id')->leftJoin('clients', 'client_packets.client_id', '=', 'clients.id')->select('client_packets.*', 'packets.price', 'packets.title', 'clients.login')->first();
            $endDateUnix = strtotime($client_packet->end_date);
            $nowDateUnix = strtotime(Carbon::now());
            $different = $endDateUnix - $nowDateUnix;
            $different = (int)($different / 3600 / 24);
            $priceForDay = (float)$client_packet->price / 30;
            $ostatok = $priceForDay * $different;
            $dealer->balance += $ostatok;
            DB::beginTransaction();
            DB::table('client_packets')->where('id', $client_packet->id)->delete();
            BalanceHistory::create(['dealer_id' => $dealer->id, 'date' => Carbon::now(), 'price' => '+' . $ostatok, 'action' => 'Остановлен пакет: ' . $client_packet->title, 'client' => $client_packet->login]);
            $dealer->save();
            DB::commit();
            return redirect()->route('dealer.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('dealer.index');
        }
    }
}
