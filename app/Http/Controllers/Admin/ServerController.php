<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServerController extends Controller
{
    public function index()
    {
        $allServers = DB::table('client_packets')->leftJoin('clients', 'clients.id', '=', 'client_packets.client_id')->select('clients.server', DB::raw('count(*) as total'))->groupBy('server')->get()->toArray();
        $servers = [];
        foreach ($allServers as $server) {
            $servers[$server->server] = $server->total;
        }
        return view('admin.server', compact('servers'));
    }
}
