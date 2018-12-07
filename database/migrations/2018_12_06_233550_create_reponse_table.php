<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_id');
            $table->integer('region_id');
             $table->foreign('quiz_id')->references('id')->on('quiz');
              $table->foreign('region_id')->references('id')->on('region');
              $table->string('rep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reponse');
    }
}
