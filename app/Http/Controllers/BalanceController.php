<?php

namespace App\Http\Controllers;

use App\Models\BalanceHistory;
use App\Models\Dealer;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index()
    {
        $dealer = Dealer::where('login', session('login'))->first();
        return view('balance', compact('dealer'));
    }
    public function history(Request $request)
    {
        $q = $request->query('q');
        if (!$q) {
            $q = 50;
        }
        $dealer = Dealer::where('login', session('login'))->first();
        $histories = BalanceHistory::where('dealer_id', $dealer->id)->limit($q)->get()->reverse();
        return view('balance_history', compact('histories'));
    }
}
