<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreeVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degree_vacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('degree_id')->unsigned();
            $table->integer('vacancy_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('degree_vacancy', function (Blueprint $table){
            $table->foreign('degree_id')->references('id')->on('degree')->onDelete('cascade');
            $table->foreign('vacancy_id')->references('id')->on('vacancy')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('degree_vacancy');
    }
}
