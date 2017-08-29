<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatisfactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('satisfactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_ID',12);
            $table->string('name',10);
            $table->string('Medical_Service',8);
            $table->string('Health_Education_Care',8);
            $table->string('Interactive',8);
            $table->string('Friendly',8);
            $table->string('Printing_Clear',8);
            $table->string('Font_Moderate',8);
            $table->string('Easily',8);
            $table->string('Meets_Requirements',8);
            $table->string('Teaching',8);
            $table->string('Schedule',8);
            $table->string('Attitude',8);
            $table->string('Expression',8);
            $table->string('Speed',8);
            $table->string('Patient',8);
            $table->string('Initiative',8);
            $table->string('Familiarity',8);
            $table->string('Kind',8);
            $table->string('Patient_Reply',8);
            $table->string('Remind',8);
            $table->string('Medicine_Problem',8);
            $table->string('Other',8);
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
        //
    }
}
