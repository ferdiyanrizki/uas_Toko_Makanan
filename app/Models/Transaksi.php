<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{

    protected $fillable = [
        'user_id',
        'makanan_id',
        'jumlah',
        'total',
    ];


    public function makanan()
    {
        return $this->belongsTo(Makanan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
