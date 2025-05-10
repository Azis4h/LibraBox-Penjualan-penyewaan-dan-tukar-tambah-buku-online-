<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                // 'id' => 1,
               'nama' => 'mulya',
                'email' => 'mulya@gmail.com',
                'password' => bcrypt ('mully'),
                //'role' => 'admin',

            ],
            
        ]);
    }
}
