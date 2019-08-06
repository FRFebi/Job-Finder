<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrefVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pref_vacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pref_id')->unsigned();
            $table->integer('vacancy_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('pref_vacancy', function (Blueprint $table){
            $table->foreign('pref_id')->references('id')->on('qualifications')->onDelete('cascade');
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
        Schema::dropIfExists('pref_vacancy');
    }
}
