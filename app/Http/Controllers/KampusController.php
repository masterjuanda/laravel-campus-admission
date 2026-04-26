<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KampusController extends Controller
{

    public function index()
    {
        $nama_kampus = "Universitas Teknologi Medan";
        $slogan = "Mencetak Generasi Unggul";
        return view('konten.beranda', compact('nama_kampus', 'slogan'));
    }

    public function formulir()
    {
        $nama_kampus = "Universitas Teknologi Medan";
        $tahun_pendaftaran = date("Y");
        return view('konten.pendaftaran', compact('nama_kampus', 'tahun_pendaftaran'));
    }

    public function proses(Request $request)
    {
        $request->validate([
            "nama_lengkap" => "required|max:35",
            "email" => "required|email|max:35",
            "telepon" => "required|max:13",
            "tanggal_lahir" => "required|date",
            "alamat" => "required|max:25",
            "fakultas_pilihan" => "required|max:35",
            "prodi_pilihan" => "required|max:35",
            "persetujuan" => "accepted",
        ]);

        try {
            $id_acak = rand(1000, 9999);

            DB::table('pendaftar')->insert([
                'idpendaftar' => $id_acak,
                'namalengkap' => $request->nama_lengkap,
                'email' => $request->email,
                'nohp' => $request->telepon,
                'tgllahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'namafakultas' => $request->fakultas_pilihan,
                'namaprodi' => $request->prodi_pilihan,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->back()->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan data');
        }
    }
}
