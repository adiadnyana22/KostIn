<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreRelationsToAlamatDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alamat_details', function (Blueprint $table) {
            $table->foreign('provinsiID')->references('id')->on('provinsis')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alamat_details', function (Blueprint $table) {
            $table->dropForeign('alamat_details_provinsiID_foreign');
        });
    }
}
