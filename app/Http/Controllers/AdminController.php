<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
use App\Models\Saran;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $totalPendaftar = \App\Models\pendaftar::count();
        $view = $request->query('view');

        // Jika view adalah pendaftaran, ambil semua data pendaftar
        $semuaPendaftar = ($view == 'pendaftaran') ? \App\Models\pendaftar::all() : collect();

        return view('layouts.admin', compact('totalPendaftar', 'semuaPendaftar', 'view'));
    }
    public function dataSaran()
    {
        $semuaSaran = Saran::latest()->get();
        return view('admin.data-saran', compact('semuaSaran'));
    }
}
