<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class PacketController extends Controller
{
    public function index()
    {
        $dealer = Dealer::where('login', session('login'))->first();
        return view('packet', compact('dealer'));
    }
}
