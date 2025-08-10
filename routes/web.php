<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PembelianController;

use App\Http\Controllers\PenjualanController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn() => redirect('/makanan'));
Route::resource('makanan', MakananController::class);

// Pembelian
Route::get('makanan/{id}/beli', [PembelianController::class, 'create'])->name('pembelian.create');
Route::post('makanan/{id}/beli', [PembelianController::class, 'store'])->name('pembelian.store');
Route::get('pembelian/{id}', [PembelianController::class, 'show'])->name('pembelian.show');

// Laporan harian pembelian
Route::get('laporan-harian', [PembelianController::class, 'laporanHarian'])->name('pembelian.laporan_harian');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Penjualan
Route::resource('penjualan', PenjualanController::class);
