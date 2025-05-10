<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi'; // Sesuai dengan nama tabel
    protected $fillable = [
        'type_transaksi', 'total_harga', 'status', 'tanggal_mulai', 'tanggal_selesai',
        'old_book_title', 'old_book_kondisi', 'selisi_harga', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaksiItems()
    {
        return $this->hasMany(TransaksiItem::class);
    }
}




