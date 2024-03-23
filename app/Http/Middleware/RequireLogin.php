<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RequireLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna telah login
        if (!Auth::check()) {
            // Redirect pengguna ke halaman login jika belum login
            return redirect()->route('login');
        }

        // Jika pengguna sudah login, lanjutkan ke proses berikutnya
        return $next($request);
    }
}