<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsGuest
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Jika pengguna sudah login, alihkan ke rute tertentu
            return redirect()->route('home.page')->with('cantAccess', 'Anda sudah login!');
        } else {
            // Jika pengguna belum login, lanjutkan dengan request
            return $next($request);
        }
    }
}
