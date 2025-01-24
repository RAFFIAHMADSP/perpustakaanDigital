<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Unautorized
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::check()){
            return $next($request);
        }

        if(Auth::user()->role === 'admin'){
            return redirect()->route('admin,dahboard');
        }else if(Auth::user()->role ==='petugas'){
            return redirect()->route('petugas.dahboard');
        }else if(Auth::user()->role ==='peminjam'){
            return redirect()->route('peminjam.dahboard');
        }else {
            return redirect()->route('login')->with('error', 'You are not authorized to access this page');
        }
    }
}
