<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login dan role-nya admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Kalau bukan admin, redirect ke home dengan pesan error
        return redirect()->route('home')->with('error', 'Akses ditolak! Anda bukan admin.');
    }
}