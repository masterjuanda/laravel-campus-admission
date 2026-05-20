<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;

class SaranController extends Controller
{
    public function kirim(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama'  => 'required|max:100',
            'email' => 'required|email|max:100',
            'saran' => 'required',
        ]);

        // Simpan ke database
        Saran::create([
            'nama'  => $request->nama,
            'email' => $request->email,
            'saran' => $request->saran,
        ]);

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('saran_sukses', 'Saran berhasil dikirim! Terima kasih.');
    }
}
