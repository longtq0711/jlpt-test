<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Question extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_id');
            $table->longText('question');
            $table->longText('image')->nullable();
            $table->longText('answer1');
            $table->longText('answer2');
            $table->longText('answer3');
            $table->longText('answer4');
            $table->enum('correct_answer', ['answer1','answer2','answer3','answer4']);
            $table->timestamps();
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
