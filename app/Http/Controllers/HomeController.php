<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Cek apakah user sudah login
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Ambil data user yang sedang login
        $user = auth()->user();

        // Kirim data ke view
        return view('home', compact('user'));
    }
}