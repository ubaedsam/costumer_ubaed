<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsUserVerifyEmail
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
        if(!Auth::guard('web')->user()->email_verified)
        {
            Auth::guard('web')->logout();
            return redirect()->route('user.login')->with('fail','Anda harus verifikasi akun terlebih dahulu. Kami telah mengirimkan pesan aktivasi akun, tolong cek email anda')->withInput();
        }
        return $next($request);
    }
}
