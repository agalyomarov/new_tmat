<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Dealer;
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

    public function edit(Client $client, Request $request)
    {
        $q = $request->query('q');
        $s = $request->query('s');
        if (!$q) {
            $q = 10;
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
        // dd($clients);
        return view('dealer', compact('dealer', 'clients', 'countClients', 'elementCount', 'allClients', 'client'));
    }

    public function update(Client $client, Request $request)
    {
        $data = $request->all();
        // dd($data);
        try {
            $validator = Validator::make($data, [
                'login' => ['required', 'unique:clients,login,' . $client->id, 'min:3', 'max:15'],
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
            Client::where(['dealer_id' => $dealer->id, 'id' => $client->id])->update($validated);
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
}
