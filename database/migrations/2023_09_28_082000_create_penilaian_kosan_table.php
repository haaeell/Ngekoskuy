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
        Schema::create('penilaian_kosan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kosan_id');
            $table->unsignedBigInteger('kriteria_id');
            $table->integer('nilai');
            $table->timestamps();

            // Definisi foreign key
            $table->foreign('kosan_id')->references('id')->on('kosans')->onDelete('cascade');
            $table->foreign('kriteria_id')->references('id')->on('kriteria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaian_kosan');
    }
};
