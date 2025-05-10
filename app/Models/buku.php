<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = ['title', 'author', 'deskripsi', 'kategori', 'harga', 'stock', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(TransaksiItem::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function likes()
    {
        return $this->hasMany(BukuUserLike::class);
    }
}
    


    
