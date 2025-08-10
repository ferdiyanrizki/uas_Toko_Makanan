<?php

namespace Database\Seeders;

use App\Models\Makanan;
use Illuminate\Database\Seeder;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Makanan::create([
            'nama' => 'Nasi Goreng Spesial',
            'deskripsi' => 'Nasi goreng dengan topping ayam, telur, dan sayuran segar.',
            'harga' => 25000,
            'stok' => 50,
            'kategori' => 'Makanan Utama',
            'gambar' => 'nasi_goreng.jpg',
        ]);
        Makanan::create([
            'nama' => 'Es Teh Manis',
            'deskripsi' => 'Minuman teh manis dingin yang menyegarkan.',
            'harga' => 8000,
            'stok' => 100,
            'kategori' => 'Minuman',
            'gambar' => 'es_teh.jpg',
        ]);
    }
}
