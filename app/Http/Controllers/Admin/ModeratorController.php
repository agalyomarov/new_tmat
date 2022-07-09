<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModeratorController extends Controller
{
    public function index()
    {
        $moderator = DB::table('moderator')->first();
        if (!$moderator) {
            DB::table('moderator')->insert(['balance' => 0]);
        }
        $moderator = DB::table('moderator')->first();
        return view('admin.moderator', compact('moderator'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $balance = (float)$data['balance'];
        DB::table('moderator')->update(['balance' => $balance]);
        return redirect()->route('admin.moderator.index');
    }
}
