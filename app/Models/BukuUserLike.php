<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuUserLike extends Model
{
    use HasFactory;

    protected $table = 'buku_user_likes';
    protected $fillable = ['user_id', 'buku_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

}


