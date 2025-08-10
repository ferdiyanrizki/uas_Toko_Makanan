<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makanans = Makanan::all();
        return view('makanan.index', compact('makanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori' => 'required',
        ]);
        Makanan::create($request->all());
        return redirect()->route('makanan.index')->with('success', 'Makanan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Makanan $makanan)
    {
        return view('makanan.show', compact('makanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Makanan $makanan)
    {
        return view('makanan.edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Makanan $makanan)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori' => 'required',
        ]);
        $makanan->update($request->all());
        return redirect()->route('makanan.index')->with('success', 'Makanan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Makanan $makanan)
    {
        $makanan->delete();
        return redirect()->route('makanan.index')->with('success', 'Makanan berhasil dihapus!');
    }
}
