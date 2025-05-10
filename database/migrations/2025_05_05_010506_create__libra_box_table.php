<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id(); // id (PK)
            $table->string('nama'); // nama user
            $table->string('email')->unique(); // email unik
            $table->string('password'); // password
            $table->timestamps();

        });

        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade')->unique(); // 1-1
            $table->string('alamat');
            $table->string('no_hp');
            $table->timestamps();
        });
        
        
        Schema::create('buku', function (Blueprint $table) {
            $table->id(); 
            $table->string('title'); 
            $table->string('author')->nullable(); 
            $table->text('deskripsi')->nullable(); 
            $table->string('kategori')->nullable();
            $table->decimal('harga');
            $table->integer('stock'); 
            $table->timestamps();
            
            // Relasi foreign key
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
        });

        Schema::create('transaksi', function (Blueprint $table) {
            $table->id(); 
            $table->enum('type_transaksi', ['beli', 'sewa', 'tukar_tambah']); 
            $table->decimal('total_harga', 10,2)->nullable(); 
            $table->enum('status', ['pending', 'done', 'cancel'])->default('pending'); 
            $table->date('tanggal_mulai')->nullable();   // untuk sewa
            $table->date('tanggal_selesai')->nullable(); // untuk sewa
            $table->string('old_book_title')->nullable(); // judul buku lama (tukar tambah)
            $table->text('old_book_kondisi')->nullable();     // kondisi buku lama (tukar tambah)
            $table->decimal('selisi_harga')->nullable(); // selisih harga (tukar tambah)
            
            // Relasi ke users
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('transaksi_items', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_buku');             
            $table->decimal('harga_pada_waktu'); // harga saat transaksi
            
            // Foreign key constraints
            $table->foreignId('transaksi_id')->constrained('transaksi')->onDelete('cascade');
            $table->foreignId('buku_id')->constrained('buku')->onDelete('cascade');
            $table->timestamps();
        });
            Schema::create('rating', function (Blueprint $table) {
            $table->id(); 
            $table->tinyInteger('rating')->unsigned(); // nilai rating 1–5
            $table->text('komen')->nullable(); 
            
            $table->foreignId   ('user_id')->constrained('user')->onDelete('cascade');
            $table->foreignId('buku_id')->constrained('buku')->onDelete('cascade');
            $table->timestamps();
            
        });

        Schema::create('buku_user_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            $table->foreignId('buku_id')->constrained('buku')->onDelete('cascade');
            $table->timestamps();
        });
        
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('buku');
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('transaksi_items');
        Schema::dropIfExists('rating');
        Schema::dropIfExists('user_profiles');
        Schema::dropIfExists('buku_user_likes');

    }
};
