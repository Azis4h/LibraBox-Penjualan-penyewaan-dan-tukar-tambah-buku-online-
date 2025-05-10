<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksiItems extends Model
{
    use HasFactory;

    protected $table = 'transaksi_items'; // Sesuai nama tabel di database
    protected $fillable = ['jumlah_buku', 'harga_pada_waktu', 'transaksi_id', 'buku_id'];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}


