<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_vacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->integer('vacancy_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('location_vacancy', function (Blueprint $table){
            $table->foreign('vacancy_id')->references('id')->on('vacancy')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('location')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_vacancy');
    }
}
