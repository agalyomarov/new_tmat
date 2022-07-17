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
        $client_packets = DB::table('client_packets')->where('client_id', $client->id)->orderBy('end_date', 'DESC')->get(['packet_id', 'end_date'])->toArray();
        $client_packet = [];
        foreach ($client_packets as $key => $packet) {
            $client_packet[$packet->packet_id] = $client_packets[0]->end_date;
        }
        $client_packets = $client_packet;
        // dd($client_packets);
        return view('packet', compact('dealer', 'packets', 'client', 'client_packets'));
    }

    public function store(Client $client, Request $request)
    {
        try {
            $dealer = Dealer::where('login', session('login'))->first();
            $data = $request->all();
            $startTime = time();
            $endTime = Carbon::parse($data['data2'])->timestamp;
            $different = $endTime - $startTime;
            if ($different <= 0) {
                return redirect()->route('dealer.index');
            }
            $packets = Packet::whereIn('id', $data['packets'])->get();
            $totalPrice = 0;
            DB::beginTransaction();
            foreach ($packets as $packet) {
                $checkPacket = DB::table('client_packets')->where(['dealer_id' => $dealer->id, 'client_id' => $client->id, 'packet_id' => $packet->id])->first();
                if ($checkPacket) {
                    if ($data['data2'] > $checkPacket->end_date) {
                        DB::table('client_packets')->where('id', $checkPacket->id)->update(['end_date' => $data['data2']]);
                        $start_time_packet = Carbon::parse($checkPacket->end_date)->timestamp;
                        $different = $endTime - $start_time_packet;
                        $different = (int)($different / 3600 / 24);
                        $priceForDay = (float)$packet->price / 30;
                        $pricePacket = $priceForDay * $different;
                        $totalPrice += $pricePacket;
                        if (round($pricePacket, 2) > 0) {
                            BalanceHistory::create(['dealer_id' => $dealer->id, 'date' => Carbon::now(), 'price' => '-' . round($pricePacket, 2), 'action' => 'Куплен пакет: ' . $packet->title, 'client' => $client->login]);
                        }
                    }
                } else {
                    DB::table('client_packets')->insert(['dealer_id' => $dealer->id, 'client_id' => $client->id, 'packet_id' => $packet->id, 'end_date' => $data['data2']]);
                    $different = $endTime - $startTime;
                    $different = (int)($different / 3600 / 24);
                    $priceForDay = (float)$packet->price / 30;
                    $pricePacket = $priceForDay * $different;
                    $totalPrice += $pricePacket;
                    if (round($pricePacket, 2) > 0) {
                        BalanceHistory::create(['dealer_id' => $dealer->id, 'date' => Carbon::now(), 'price' => '-' . round($pricePacket, 2), 'action' => 'Куплен пакет: ' . $packet->title, 'client' => $client->login]);
                    }
                }
            }
            $dealer->balance = round($dealer->balance - $totalPrice, 2);
            $dealer->save();
            DB::commit();
            if ($dealer->balance < $totalPrice) {
                DB::rollback();
                return redirect()->route('dealer.index');
            };
            return redirect()->route('dealer.index');
        } catch (\Exception $e) {
            DB::rollback();
            // return redirect()->route('dealer.index');
            return $e->getMessage();
        }
    }
    public function stop($client, Request $request)
    {
        try {
            $dealer = Dealer::where('login', session('login'))->first();
            $client_packets = DB::table('client_packets')->where(['client_packets.client_id' => $client, 'client_packets.dealer_id' => $dealer->id])->leftJoin('packets', 'client_packets.packet_id', '=', 'packets.id')->leftJoin('clients', 'client_packets.client_id', '=', 'clients.id')->select('client_packets.*', 'packets.price', 'packets.title', 'clients.login')->get();
            // dd($client_packets);
            $totalOstatok = 0;
            foreach ($client_packets as $packet) {
                $endDateUnix = strtotime($packet->end_date);
                $nowDateUnix = strtotime(Carbon::now());
                $different = $endDateUnix - $nowDateUnix;
                $different = (int)($different / 3600 / 24);
                $priceForDay = (float)$packet->price / 30;
                $ostatok = $priceForDay * $different;
                $totalOstatok += round($ostatok, 2);
                if (round($ostatok, 2) > 0) {
                    BalanceHistory::create(['dealer_id' => $dealer->id, 'date' => Carbon::now(), 'price' => '+' . round($ostatok, 2), 'action' => 'Остановлен пакет: ' . $packet->title, 'client' => $packet->login]);
                }
            }
            $dealer->balance += $totalOstatok;
            DB::beginTransaction();
            DB::table('client_packets')->where('client_id', $client)->delete();
            $dealer->save();
            DB::commit();
            return redirect()->route('dealer.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('dealer.index');
        }
    }
}
