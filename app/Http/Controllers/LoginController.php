<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validated = '';
        try {
            if ($data['action'] == 'login') {
                $validator = Validator::make($data, [
                    'login' => ['required', 'min:5', 'exists:dealers,login'],
                    'password' => ['required'],
                ]);
                if ($validator->fails()) {
                    return redirect()
                        ->route('login.index')
                        ->withErrors($validator)
                        ->withInput();
                }
                $validated = $validator->validated();
                $dealer = Dealer::where(['login' => $validated['login'], 'password' => $validated['password']])->first();
                if (!$dealer) {
                    return redirect()
                        ->route('login.index')
                        ->withErrors(['password' => 'Введен не правилный пароль'])
                        ->withInput();
                }
                session(['login' => $dealer->login]);
                session(['password' => $dealer->password]);
                return redirect()->route('main.index');
            } else if ($data['action'] == 'register') {
                $validator = Validator::make($data, [
                    'login' => ['required', 'unique:dealers,login', 'min:5', 'max:15'],
                    'password' => ['required', 'min:5', 'max:15'],
                    'email' => ['required', 'email']
                ]);
                if ($validator->fails()) {
                    return redirect()
                        ->route('login.index')
                        ->withErrors($validator)
                        ->withInput();
                }
                $validated = $validator->validated();
                $dealer = Dealer::create(['login' => $data['login'], 'password' => $data['password'], 'email' => $data['email']]);
                session(['login' => $dealer->login]);
                session(['password' => $dealer->password]);
                return redirect()->route('main.index');
            }
            return redirect()->route('login.index');
        } catch (\Exception $e) {
            return redirect()->route('login.index');
        }
    }

    public function logout(Request $request)
    {
        session()->forget('login');
        session()->forget('password');
        return redirect()->route('login.index');
    }
}
