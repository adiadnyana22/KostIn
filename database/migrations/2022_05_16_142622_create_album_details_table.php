<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('albumID');
            $table->unsignedBigInteger('pictureID');

            $table->foreign('albumID')->references('id')->on('albums')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pictureID')->references('id')->on('pictures')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_details');
    }
}
