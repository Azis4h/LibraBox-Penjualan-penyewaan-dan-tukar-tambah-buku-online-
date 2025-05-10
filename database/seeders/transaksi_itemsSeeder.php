<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class transaksi_itemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('transaksi_items')->insert([
        'jumlah_buku' => 2,
        'harga_pada_waktu' => 60000,
        'transaksi_id' => 1,
        'buku_id' => 1,
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now(),
         ]);
    }
}
