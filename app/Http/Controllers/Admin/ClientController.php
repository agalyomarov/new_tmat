<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $s = $request->query('s');
        $clients = Client::where('clients.login', 'LIKE', '%' . $s . '%')->leftJoin('dealers', 'clients.dealer_id', '=', 'dealers.id')->select('clients.id', 'clients.login', 'clients.password', 'dealers.login as dealer_login')->paginate(30);
        // dd($clients);
        return view('admin.client', compact('clients'));
    }
}
