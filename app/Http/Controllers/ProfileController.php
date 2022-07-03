<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        $dealer = Dealer::where('login', session('login'))->first();
        return view('profile', compact('dealer'));
    }
    public function update(Request $request)
    {
        $data = $request->all();
        try {
            $validator = Validator::make($data, [
                'login' => ['required', 'min:5', 'max:15', 'unique:dealers,login,' . $data['id']],
                'password' => ['required', 'min:5', 'max:15'],
                'email' => ['nullable', 'email'],
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->route('profile.index')
                    ->withErrors($validator)
                    ->withInput();
            }
            $validated = $validator->validated();
            Dealer::where('id', $data['id'])->update($validated);
            session(['login' => $validated['login']]);
            session(['password' => $validated['password']]);
            return redirect()->route('profile.index');
        } catch (\Exception $e) {
            return redirect()->route('profile.index');
        }
    }
}
