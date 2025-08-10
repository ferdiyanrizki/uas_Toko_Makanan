<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Makanan;
use App\Models\User;

class PenjualanController extends Controller
{
    // Menampilkan daftar penjualan
    public function index()
    {
        $penjualans = Transaksi::with(['makanan', 'user'])->orderBy('created_at', 'desc')->get();
        return view('penjualan.index', compact('penjualans'));
    }

    // Menampilkan form tambah penjualan
    public function create()
    {
        $makanans = Makanan::all();
        $users = User::all();
        return view('penjualan.create', compact('makanans', 'users'));
    }

    // Menyimpan data penjualan baru
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'makanan_id' => 'required|exists:makanans,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $makanan = Makanan::findOrFail($request->makanan_id);
        $total = $makanan->harga * $request->jumlah;

        Transaksi::create([
            'user_id' => $request->user_id,
            'makanan_id' => $request->makanan_id,
            'jumlah' => $request->jumlah,
            'total' => $total,
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil ditambahkan!');
    }
}
