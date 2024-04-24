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
        Schema::create('pemeran_movie', function (Blueprint $table) {
            $table->id('id_pemeran_movie');

            $table->unsignedBigInteger('id_movie')->nullable();
            $table->foreign('id_movie')
            ->references('id_movie')
            ->on('movie')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id_pemeran');
            $table->foreign('id_pemeran')
            ->references('id_pemeran')
            ->on('pemeran')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')
            ->references('id_user')
            ->on('user')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeran_movie');
    }
};
