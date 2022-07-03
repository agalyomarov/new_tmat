<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index()
    {
        $dealer = Dealer::where('login', session('login'))->first();
        return view('balance', compact('dealer'));
    }
    public function history()
    {
        return view('balance_history');
    }
}
