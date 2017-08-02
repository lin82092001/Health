<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('dailys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_ID');
            $table->string('name');
            $table->string('Sour_Fruit_Juice');
            $table->string('Sour_Food_Seasoning');
            $table->string('Sweets');
            $table->string('Drink');
            $table->string('Spicy_Food_Seasoning');
            $table->string('Dairy_Product');
            $table->string('Unknown_Food');
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
        //Schema::drop('dailys');
    }
}
