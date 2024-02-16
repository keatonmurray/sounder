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
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('artist_name');
            $table->string('album_title');
            $table->longText('album_description');
            $table->string('genre');
            $table->string('tags');
            $table->string('album_cover');
            $table->string('audios');
            $table->integer('digital_audio_price');
            $table->integer('single_track_price');
            $table->integer('play_limit');
            /*
            $table->string('merch_first_upload');
            $table->string('merch_second_upload');
            $table->string('merch_third_upload');
            $table->string('merch_fourth_upload');
            $table->string('merch_name');
            $table->integer('merch_price');
            $table->longText('merch_description');
            $table->string('ship_from');
            $table->string('ship_to');
            $table->string('city');
            $table->string('zip_code');
            $table->integer('shipping_cost');
            $table->string('shipping_currency');
            $table->string('vat_country');
            $table->integer('vat_estimate');
            $table->string('vat_currency');
            */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
