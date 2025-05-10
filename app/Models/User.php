<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Model
{
   protected $table = 'user';
         protected $fillable = ['nama','email','password'];
         public $timestamps = false;
            
        public function transactions()
            {
                return $this->hasMany(Transaksi::class);
            }
        public function ratings()
            {
                return $this->hasMany(Rating::class);
            }
         public function books()
            {
                return $this->hasMany(Buku::class);
            }

         public function likedBooks()
            {
                return $this->hasMany(BukuUserLike::class);
            }   
    }


