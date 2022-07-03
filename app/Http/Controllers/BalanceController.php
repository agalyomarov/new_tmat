<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index()
    {
        return view('balance');
    }
    public function history()
    {
        return view('balance_history');
    }
}
