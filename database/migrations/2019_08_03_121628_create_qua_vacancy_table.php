<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuaVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qua_vacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qua_id')->unsigned();
            $table->integer('vacancy_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('qua_vacancy', function (Blueprint $table){
            $table->foreign('qua_id')->references('id')->on('qualifications')->onDelete('cascade');
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
        Schema::dropIfExists('qua_vacancy');
    }
}
