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
        Schema::create('kosans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('gambar')->nullable(); // Gambar adalah kolom opsional
            $table->decimal('harga', 10, 2); // Harga dengan 2 angka desimal
            $table->text('fasilitas');
            $table->decimal('luas_kamar', 5, 2); // Luas kamar dengan 2 angka desimal
            $table->decimal('jarak_makan', 5, 2); // Jarak makan dengan 2 angka desimal
            $table->text('keamanan');
            $table->enum('kategori', ['campur', 'cowo', 'cewe']);
            $table->integer('sisa_kamar');
            $table->text('peraturan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kosans');
    }
};
