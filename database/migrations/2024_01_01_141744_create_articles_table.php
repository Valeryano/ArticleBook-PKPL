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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('Judul_Artikel');
            $table->string('Penulis');
            $table->string('Nama_Jurnal');
            $table->string('Volume_Jurnal');
            $table->integer('Halaman');
            $table->string('ISSN');
            $table->string('Penerbit');
            $table->string('URL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
