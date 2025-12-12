<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login dan role-nya user
        if (auth()->check() && auth()->user()->role === 'user') {
            return $next($request);
        }

        // Kalau bukan user biasa, redirect ke home
        return redirect()->route('home')->with('error', 'Akses ditolak!');
    }
}