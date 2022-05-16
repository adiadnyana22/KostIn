<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreRelationsToProvinsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provinsis', function (Blueprint $table) {
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
        Schema::table('provinsis', function (Blueprint $table) {
            $table->dropForeign('provinsis_pictureID_foreign');
        });
    }
}
