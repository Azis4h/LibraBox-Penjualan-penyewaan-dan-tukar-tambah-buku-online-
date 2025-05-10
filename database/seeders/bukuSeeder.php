<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bukuSeeder extends Seeder
{
    public function run()
    {
        DB::table('buku')->insert([
            [
                'title' => 'hujan',
                'author' => 'tereliye',
                'deskripsi' => 'hujan membawa',
                'kategori' => 'romantis',
                'harga' => 70000,
                'stock' => 15,
                'user_id' => 1
            ],
        ]);
    }
}
