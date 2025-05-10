<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user_profilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_profiles')->insert([
            [
                'alamat' => 'mamuju',
                'no_hp' => '08262418719',
                'user_id' => 1
            ],
        ]);

    }
}
