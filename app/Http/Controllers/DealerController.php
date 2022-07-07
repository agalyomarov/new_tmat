<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Dealer;
use Illuminate\Http\Request;
use stdClass;

class DealerController extends Controller
{
    public function index()
    {
        $dealer = Dealer::where('login', session('login'))->first();
        $clients = Client::where('dealer_id', $dealer->id)->get()->reverse();
        return view('dealer', compact('dealer', 'clients'));
    }
}
