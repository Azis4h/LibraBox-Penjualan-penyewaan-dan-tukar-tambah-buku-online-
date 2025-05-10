<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            $this->call([
            userSeeder::class,
            bukuSeeder::class,
            Buku_User_LikesSeeder::class,
            ratingSeeder::class,
           //sewaSeeder::class,
            TransaksiSeeder::class,
        ]);
    }
}
