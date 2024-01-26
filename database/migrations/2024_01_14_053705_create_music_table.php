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
        Schema::create('music', function (Blueprint $table) {
            $table->increments('id');
            $table->string('artist_name');
            $table->string('album_title');
            $table->longText('album_description');
            $table->string('album_cover');
            $table->string('audios');
            $table->integer('price');
            $table->string('bg_img');
            $table->string('merch');
            $table->string('merch_name');
            $table->integer('merch_price');
            $table->integer('digital_track_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};
