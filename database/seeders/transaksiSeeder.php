<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
       DB::table('transaksi')->insert([
    [
        'type_transaksi' => 'beli',
        'total_harga' => 12000,
        'status' => 'done',
        'tanggal_mulai' => null,
        'tanggal_selesai' => null,
        'old_book_title' => null,
        'old_book_kondisi' => null,
        'selisi_harga' => null,
        'user_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
    [
        'type_transaksi' => 'sewa',
        'total_harga' => 40000,
        'status' => 'pending',
        'tanggal_mulai' => '2025-05-10',
        'tanggal_selesai' => '2025-05-17',
        'old_book_title' => null,
        'old_book_kondisi' => null,
        'selisi_harga' => null,
        'user_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
    [
        'type_transaksi' => 'tukar_tambah',
        'total_harga' => 100000,
        'status' => 'done',
        'tanggal_mulai' => null,
        'tanggal_selesai' => null,
        'old_book_title' => 'Buku Lama',
        'old_book_kondisi' => 'Masih bagus sedikit sobek di sampul',
        'selisi_harga' => 25000,
        'user_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]
]);

    }
}
