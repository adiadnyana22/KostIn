<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kost_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kostID');
            $table->string('tipeKost', 25);
            $table->integer('jumlahKamar');
            $table->integer('jumlahPenghuni');
            $table->double('harga');
            $table->unsignedBigInteger('alamatID');
            $table->integer('favourites')->default(0);
            $table->unsignedBigInteger('albumID')->nullable();

            $table->foreign('kostID')->references('id')->on('kosts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kost_details');
    }
}
