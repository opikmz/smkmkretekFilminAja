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
        Schema::create('movie', function (Blueprint $table) {
            $table->id('id_movie');
            $table->string('judul');
            // $table->string('direktur')->nullable();
            $table->timestamp('tanggal_keluar')->nullable();

            $table->unsignedBigInteger('id_sutradara')->nullable();
            $table->foreign('id_sutradara')
            ->references('id_sutradara')
            ->on('sutradara')
            ->onDelete('set null');

            $table->string('gambar')->nullable();
            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
