<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToAlamatIDAndAlbumIDToKostDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kost_details', function (Blueprint $table) {
            $table->foreign('alamatID')->references('id')->on('alamat_details')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('albumID')->references('id')->on('albums')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kost_details', function (Blueprint $table) {
            $table->dropForeign('kost_details_alamatID_foreign');
            $table->dropForeign('kost_details_albumID_foreign');
        });
    }
}
