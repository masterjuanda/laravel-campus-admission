<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar; // Pastikan model di-import
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        // 1. Hitung total pendaftar dari database
        $totalPendaftar = Pendaftar::count();

        // 2. Ambil 5 data pendaftar terbaru untuk ditampilkan di tabel
        $pendaftarTerbaru = Pendaftar::latest()->take(5)->get();

        // 3. Kirim data ke view
        return view('layouts.admin', compact('totalPendaftar', 'pendaftarTerbaru'));
    }
}
