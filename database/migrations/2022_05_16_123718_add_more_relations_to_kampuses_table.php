<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreRelationsToKampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kampuses', function (Blueprint $table) {
            $table->foreign('logoID')->references('id')->on('pictures')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kampuses', function (Blueprint $table) {
            $table->dropForeign('kampuses_logoID_foreign');
        });
    }
}
