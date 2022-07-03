<?php

namespace App\Http\Middleware;

use App\Models\Dealer;
use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $data = $request->session()->all();
        if (isset($data['login']) && isset($data['password'])) {
            $dealer = Dealer::where(['login' => $data['login'], 'password' => $data['password']])->first();
            if (!$dealer) {
                return redirect()->route('login.index');
            }
            return $next($request);
        }
        return redirect()->route('login.index');
    }
}
