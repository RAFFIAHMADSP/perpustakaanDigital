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
        Schema::create('ulasan_bukus', function (Blueprint $table) {
            $table->integer('ulasan_id')->autoIncrement()->primary();

            $table->integer('buku_id');
            $table->foreign('buku_id')
                ->references('buku_id')
                ->on('bukus')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('users_id');
            $table->foreign('users_id')
                ->references('users_id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('ulasan');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan_bukus');
    }
};
