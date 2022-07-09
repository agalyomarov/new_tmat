<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dealer;
use App\Models\Packet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DealerController extends Controller
{
    public function index(Request $request)
    {
        $s = $request->query('s');
        $dealers = Dealer::where('login', 'LIKE', '%' . $s . '%')->paginate(30);
        // dd($dealers);
        return view('admin.dealer', compact('dealers'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        try {
            $validator = Validator::make($data, [
                'login' => ['required', 'unique:dealers,login', 'min:5', 'max:15'],
                'password' => ['required', 'min:5', 'max:15'],
                'email' => ['required', 'email'],
                'balance' => ['required', 'numeric', 'min:0.00', 'max:1000000.00'],
                'discount' => ['required', 'integer'],
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->route('admin.dealer.index')
                    ->withErrors($validator)
                    ->withInput();
            }
            $validated = $validator->validated();
            Dealer::create($validated);
            return redirect()->route('admin.dealer.index');
        } catch (\Exception $e) {
            return redirect()->route('admin.dealer.index');
        }
    }

    public function edit(Dealer $dealer)
    {
        $dealers = Dealer::all()->reverse();
        return view('admin.dealer', compact('dealers', 'dealer'));
    }

    public function delete(Dealer $dealer)
    {
        $dealer->delete();
        return redirect()->route('admin.dealer.index');
    }

    public function update(Dealer $dealer, Request $request)
    {
        $data = $request->all();
        // dd($data);
        try {
            $validator = Validator::make($data, [
                'login' => ['required', 'unique:dealers,login,' . $data['id'], 'min:5', 'max:15',],
                'password' => ['required', 'min:5', 'max:15'],
                'email' => ['required', 'email'],
                'balance' => ['required', 'numeric', 'min:0.00', 'max:1000000.00'],
                'discount' => ['required', 'integer'],
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->route('admin.dealer.index')
                    ->withErrors($validator)
                    ->withInput();
            }
            $validated = $validator->validated();
            Dealer::where('id', $data['id'])->update($validated);
            return redirect()->route('admin.dealer.index');
        } catch (\Exception $e) {
            return redirect()->route('admin.dealer.index');
        }
    }
}
