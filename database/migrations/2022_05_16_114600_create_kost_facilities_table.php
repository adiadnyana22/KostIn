<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kost_facilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kostID');
            $table->unsignedBigInteger('facilitiesID');

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
        Schema::dropIfExists('kost_facilities');
    }
}
