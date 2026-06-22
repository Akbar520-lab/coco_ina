<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Di sini kamu bisa melempar data dinamis jika nanti pakai database.
        // Untuk sekarang, kita langsung panggil view profile-nya.
        return view('home');
    }
}