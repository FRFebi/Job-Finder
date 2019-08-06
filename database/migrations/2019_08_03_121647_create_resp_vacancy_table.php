<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resp_vacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resp_id')->unsigned();
            $table->integer('vacancy_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('resp_vacancy', function (Blueprint $table){
            $table->foreign('resp_id')->references('id')->on('responsibilities')->onDelete('cascade');
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
        Schema::dropIfExists('resp_vacancy');
    }
}
