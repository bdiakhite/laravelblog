<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('lastname')->after('id');
            $table->string('firstname')->after('lastname');
            $table->integer('status')->after('password');
            $table->renameColumn('id', 'idusers');
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
          $table->dropColumn('id', 'idusers');
          $table->dropColumn('lastname');
          $table->dropColumn('firstname');
          $table->dropColumn('status');
        });
    }
}
