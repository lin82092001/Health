<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('users', function (Blueprint $table) {
            $table->string('name');
            $table->string('user_ID')->unique();
            $table->string('password',60);
            $table->rememberToken();
            $table->timestamps();
        });*/

        /*Schema::table('users', function($table) {
            $table->string('name');
            $table->string('user_ID')->unique();
            $table->string('password',60);
            $table->rememberToken();
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('users');
    }
}