<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('location',25);
            $table->string('organisation',5);
            $table->string('stream',15);
            $table->string('ApplicationMode',25);
            $table->string('SelectionProcedure',100);
            $table->string('TechnicalInterview',100);
            $table->string('AnalyticalQuestions',100);
            $table->string('HRQuestions',100);
            $table->string('Suggestions',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info');
    }
}
