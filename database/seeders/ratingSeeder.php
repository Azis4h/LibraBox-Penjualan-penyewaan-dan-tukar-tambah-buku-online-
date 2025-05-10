<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ratingSeeder extends Seeder
{
    public function run()
    {
        DB::table('rating')->insert([
            [
                'rating' => 5,
                'komen' => 'Buku ini sangat bagus dan inspiratif!',
                'user_id' => 1,
                'buku_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
           
        ]);
    }
}
