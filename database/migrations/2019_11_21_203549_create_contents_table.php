<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('challenge_id');
            $table->string('petition')->nullable();
            $table->string('initial_question')->nullable();
            $table->string('statement', 1000)->nullable();
            $table->string('following_question')->nullable();
            $table->string('answer', 1000)->nullable();
            $table->timestamps();
            $table->foreign('challenge_id')->references('id')->on('challenges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
