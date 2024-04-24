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
        Schema::create('genre_movie', function (Blueprint $table) {
            $table->unsignedBigInteger('id_movie')->nullable();
            $table->foreign('id_movie')
            ->references('id_movie')
            ->on('movie')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id_genre');
            $table->foreign('id_genre')
            ->references('id_genre')
            ->on('genre')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_movie');
    }
};
