<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userProfil extends Model
{
   use HasFactory;
    protected $table = 'user_profiles';
    protected $fillable = ['alamat', 'no_hp', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}


