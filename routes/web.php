<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('layouts.app', [
        'nama_kampus' => 'Universitas Teknologi Medan',
        'slogan' => 'Mencetak Generasi Unggul'
    ]);
});

Route::post('/proses-pendaftaran', [KampusController::class, 'proses'])->name('proses.pendaftaran');
Route::post('/kirim-saran', [SaranController::class, 'kirim'])->name('kirim.saran');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route Admin (Diproteksi dengan middleware 'auth')
use App\Http\Controllers\AdminController;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/pendaftaran', [AdminController::class, 'pendaftaran'])->name('admin.pendaftaran');
    Route::get('/admin/saran', [AdminController::class, 'dataSaran'])->name('admin.saran');
    // Tambahkan route admin lainnya di sini
});
