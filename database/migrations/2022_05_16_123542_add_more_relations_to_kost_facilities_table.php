<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreRelationsToKostFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kost_facilities', function (Blueprint $table) {
            $table->foreign('facilitiesID')->references('id')->on('facilities')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kost_facilities', function (Blueprint $table) {
            $table->dropForeign('kost_facilities_facilitiesID_foreign');
        });
    }
}
