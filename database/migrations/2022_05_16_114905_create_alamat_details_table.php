<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat_details', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->unsignedBigInteger('provinsiID');
            $table->string('alamatDetail');
            $table->integer('kodePos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alamat_details');
    }
}
