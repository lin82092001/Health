<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaryAftersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('diaryAfters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_ID');
            $table->string('name');
            $table->string('Abdominal_Pain');
            $table->string('Abdominal_Discomfort');
            $table->string('Back_Pain');
            $table->string('Bloating_Feeling');
            $table->string('Overflow_Acid_Water');
            $table->string('Hiccups');
            $table->string('Poor_Taste');
            $table->string('Nausea');
            $table->string('Vomit');
            $table->string('Dizziness');
            $table->string('Skin_Itch');
            $table->string('Black_Stool');
            $table->string('Constipation');
            $table->string('Soft_Stool');
            $table->string('Number_of_Defecation');
            $table->string('Appetite');
            $table->string('Number_of_Medication');
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
        //Schema::drop('diaryAfters');
    }
}
