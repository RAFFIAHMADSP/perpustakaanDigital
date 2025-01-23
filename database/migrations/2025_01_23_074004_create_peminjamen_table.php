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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->integer('peminjaman_id')->autoIncrement()->primary();

            // Kolom buku_id dengan foreign key
            $table->integer('buku_id');
            $table->foreign('buku_id')
                ->references('buku_id')
                ->on('bukus')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Kolom users_id dengan foreign key
            $table->integer('users_id');
            $table->foreign('users_id')
                ->references('users_id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Kolom lainnya
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->string('status_peminjaman');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
