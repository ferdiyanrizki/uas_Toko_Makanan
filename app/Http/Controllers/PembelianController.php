<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PembelianController extends Controller
{

    public function create($id)
    {
        $makanan = Makanan::findOrFail($id);
        $users = \App\Models\User::all();
        return view('pembelian.create', compact('makanan', 'users'));
    }

    public function store(Request $request, $id)
    {
        $makanan = Makanan::findOrFail($id);
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'jumlah' => 'required|integer|min:1|max:' . $makanan->stok,
        ]);
        $total = $makanan->harga * $request->jumlah;
        $transaksi = Transaksi::create([
            'user_id' => $request->user_id,
            'makanan_id' => $makanan->id,
            'jumlah' => $request->jumlah,
            'total' => $total,
        ]);
        // Update stok makanan
        $makanan->decrement('stok', $request->jumlah);
        return redirect()->route('pembelian.show', $transaksi->id);
    }

    public function show($id)
    {
        $transaksi = Transaksi::with(['makanan', 'user'])->findOrFail($id);
        return view('pembelian.show', compact('transaksi'));
    }

    // Laporan harian pembelian
    public function laporanHarian(Request $request)
    {
        $tanggal = $request->input('tanggal', date('Y-m-d'));
        $transaksis = Transaksi::with(['makanan', 'user'])
            ->whereDate('created_at', $tanggal)
            ->get();
        $total = $transaksis->sum('total');
        return view('pembelian.laporan_harian', compact('transaksis', 'tanggal', 'total'));
    }
}
