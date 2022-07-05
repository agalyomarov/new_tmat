<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use App\Models\Packet;
use Illuminate\Http\Request;

class PacketController extends Controller
{
    public function index()
    {
        $dealer = Dealer::where('login', session('login'))->first();
        $packets = Packet::all();
        return view('packet', compact('dealer', 'packets'));
    }
}
