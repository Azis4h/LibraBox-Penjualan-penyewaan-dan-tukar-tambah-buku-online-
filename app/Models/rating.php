<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
        use HasFactory;

    protected $table = 'rating';
    protected $fillable = ['rating', 'komen', 'user_id', 'buku_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    }
    

