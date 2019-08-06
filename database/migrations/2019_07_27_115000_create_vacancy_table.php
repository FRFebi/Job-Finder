<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('vacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->integer('organization_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->longText('about');
            $table->timestamps();
        });

        Schema::table('vacancy', function (Blueprint $table){
            $table->foreign('job_id')->references('id')->on('job')->onDelete('cascade');
            $table->foreign('organization_id')->references('id')->on('organization')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('type')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancy');
    }
}
