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
        Schema::create('kategori_buku_relasis', function (Blueprint $table) {
            $table->integer('relasi_id')->autoIncrement()->primaryKey();

            // Kolom buku_id dengan foreign key
            $table->integer('buku_id');
            $table->foreign('buku_id')
                ->references('buku_id')
                ->on('bukus')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Kolom kategori_id dengan foreign key
            $table->integer('kategori_id');
            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('kategori_bukus')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_buku_relasis');
    }
};
