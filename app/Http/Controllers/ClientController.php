<?php

namespace App\Http\Controllers;

use App\Models\BalanceHistory;
use App\Models\Client;
use App\Models\Dealer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        try {
            $validator = Validator::make($data, [
                'login' => ['required', 'unique:clients,login', 'min:3', 'max:15'],
                'password' => ['required', 'min:3', 'max:15'],
                'server' => ['required', 'integer'],
                'description' => [],
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->route('dealer.index')
                    ->withErrors($validator)
                    ->withInput();
            }
            $validated = $validator->validated();
            $dealer = Dealer::where('login', session('login'))->first();
            $validated['dealer_id'] = $dealer->id;
            Client::create($validated);
            return redirect()->route('dealer.index');
        } catch (\Exception $e) {
            return redirect()->route('dealer.index');
        }
    }

    public function edit(Client $cclient, Request $request)
    {
        // dd($client);
        $q = $request->query('q');
        $s = $request->query('s');
        if (!$q) {
            $q = 100;
        }
        $dealer = Dealer::where('login', session('login'))->first();
        // $clients = Client::where('clients.dealer_id', $dealer->id)->leftjoin('client_packets', 'clients.id', '=', 'client_packets.client_id')->leftjoin('packets', 'packets.id', '=', 'client_packets.packet_id')->select('clients.*', 'client_packets.id as client_packet_id', 'client_packets.end_date', 'client_packets.client_id', 'packets.title as packet_title', 'packets.price as packet_price')->paginate($q);
        $elementCount = Client::where('clients.dealer_id', $dealer->id)->leftjoin('client_packets', 'clients.id', '=', 'client_packets.client_id')->leftjoin('packets', 'packets.id', '=', 'client_packets.packet_id')->select('clients.*', 'client_packets.id as client_packet_id', 'client_packets.end_date', 'packets.title as packet_title', 'packets.price as packet_price')->count();

        $countClients = Client::where('clients.dealer_id', $dealer->id)->count();
        $allClients = Client::where('clients.dealer_id', $dealer->id)->where('clients.login', 'LIKE', "%$s%")->orderBy('clients.login', 'ASC')->paginate($q);
        $pClients = [];
        $unPClients = [];
        foreach ($allClients as $key => $client) {
            $packets = DB::table('client_packets')->where('client_id', $client->id)->leftjoin('packets', 'client_packets.packet_id', '=', 'packets.id')->select('packets.title', 'packets.price', 'client_packets.end_date')->get();
            if (count($packets)) {
                $client->packets = $packets;
                array_push($pClients, $client);
            } else {
                $client->packets = array();
                array_push($unPClients, $client);
            }
        }
        $clients = array_merge($unPClients, $pClients);
        return view('dealer', compact('dealer', 'clients', 'countClients', 'elementCount', 'allClients', 'cclient'));
    }

    public function update(Client $cclient, Request $request)
    {
        $data = $request->all();
        // dd($data);
        try {
            $validator = Validator::make($data, [
                'login' => ['required', 'min:3', 'max:15', 'unique:clients,login,' . $cclient->id],
                'password' => ['required', 'min:3', 'max:15'],
                'server' => ['required', 'integer'],
                'description' => [],
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->route('dealer.index')
                    ->withErrors($validator)
                    ->withInput();
            }
            $validated = $validator->validated();
            // dd($validated);
            $dealer = Dealer::where('login', session('login'))->first();
            Client::where(['dealer_id' => $dealer->id, 'id' => $cclient->id])->update($validated);
            return redirect()->route('dealer.index');
        } catch (\Exception $e) {
            return redirect()->route('dealer.index');
        }
    }
    public function server(Request $request)
    {
        $data = $request->all();
        if (isset($data['users']) && count($data['users']) > 0 && $data['server']) {
            // dd($data['users']);
            $clients = array_unique($data['users']);
            $clients = array_values($clients);
            Client::where('dealer_id', Dealer::where('login', session('login'))->first()->id)->whereIn('id', $data['users'])->update(['server' => $data['server']]);
            return redirect()->route('dealer.index');
        }
        return redirect()->route('dealer.index');
    }
    public function delete(Client $client)
    {
        // dd($client);
        try {
            $dealer = Dealer::where('login', session('login'))->first();
            $client_packets = DB::table('client_packets')->where(['client_packets.client_id' => $client->id, 'client_packets.dealer_id' => $dealer->id])->leftJoin('packets', 'client_packets.packet_id', '=', 'packets.id')->leftJoin('clients', 'client_packets.client_id', '=', 'clients.id')->select('client_packets.*', 'packets.price', 'packets.title', 'clients.login')->get();
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
            }
            // dd($totalOstatok);
            if ($totalOstatok > 0) {
                BalanceHistory::create(['dealer_id' => $dealer->id, 'date' => Carbon::now(), 'price' => '+' . round($totalOstatok, 2), 'action' => 'Клиент удален.Средства возвращен', 'client' => $client->login]);
            }
            $dealer->balance += $totalOstatok;
            DB::beginTransaction();
            DB::table('client_packets')->where('client_id', $client->id)->delete();
            $client->delete();
            $dealer->save();
            DB::commit();
            return redirect()->route('dealer.index');
        } catch (\Exception $e) {
            DB::rollBack();
            // return $e->getMessage();
            return redirect()->route('dealer.index');
        }
    }
}
