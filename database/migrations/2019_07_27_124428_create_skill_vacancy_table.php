<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_vacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('skill_id')->unsigned();
            $table->integer('vacancy_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('skill_vacancy', function (Blueprint $table){
            $table->foreign('vacancy_id')->references('id')->on('vacancy')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skill')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_vacancy');
    }
}
