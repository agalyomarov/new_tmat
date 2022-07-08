<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Dealer;
use App\Models\Packet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class DealerController extends Controller
{
    public function index()
    {
        $dealer = Dealer::where('login', session('login'))->first();
        $clients = Client::where('dealer_id', $dealer->id)->get()->reverse();
        $client_packets = DB::table('client_packets')->get()->reverse();
        $countClients = count($clients);
        foreach ($clients as $key => $client) {
            $clients[$key]->packets = DB::table('client_packets')->where('client_id', $client->id)->get()->reverse();
        }
        // dd($clients);
        return view('dealer', compact('dealer', 'clients', 'countClients'));
    }
}
