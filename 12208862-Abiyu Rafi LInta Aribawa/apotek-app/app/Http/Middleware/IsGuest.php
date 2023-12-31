<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsGuest
{
    /**
     * Handle an incoming request.1
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('home.page')->with('message', 'Anda Sudah Login');
            } elseif (Auth::user()->role == 'cashier') {
                return redirect()->route('home.page')->with('message', 'Anda Sudah Login');
            }
        } 
        return $next($request);
    }
}
