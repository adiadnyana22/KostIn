<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('alamatID')->after('remember_token')->nullable();
            $table->string('phone', 15)->after('alamatID')->nullable();
            $table->unsignedBigInteger('roleID')->after('phone');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('alamatID');
            $table->unsignedBigInteger('roleID');
            $table->string('phone');
        });
    }
}
