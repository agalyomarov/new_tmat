<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        try {
            $validator = Validator::make($data, [
                'login' => ['required', 'unique:clients,login', 'min:5', 'max:15'],
                'password' => ['required', 'min:5', 'max:15'],
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

    public function edit(Client $client)
    {
        $dealer = Dealer::where('login', session('login'))->first();
        $clients = Client::where('clients.dealer_id', $dealer->id)->leftjoin('client_packets', 'clients.id', '=', 'client_packets.client_id')->leftjoin('packets', 'packets.id', '=', 'client_packets.packet_id')->select('clients.*', 'client_packets.id as client_packets.id', 'client_packets.end_date', 'packets.title as packet_title')->paginate();
        $countClients = Client::where('clients.dealer_id', $dealer->id)->count();
        return view('dealer', compact('dealer', 'clients', 'countClients', 'client'));
    }

    public function update(Client $client, Request $request)
    {
        $data = $request->all();
        // dd($data);
        try {
            $validator = Validator::make($data, [
                'login' => ['required', 'unique:clients,login,' . $client->id, 'min:5', 'max:15'],
                'password' => ['required', 'min:5', 'max:15'],
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
}
