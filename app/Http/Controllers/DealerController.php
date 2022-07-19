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
    public function index(Request $request)
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
        return view('dealer', compact('dealer', 'clients', 'countClients', 'elementCount', 'allClients'));
    }
}
