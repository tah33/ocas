<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('subject_id')->nullable();
                $table->string('question');
                $table->string('option1');
                $table->string('option2');
                $table->string('option3')->nullable();
                $table->string('option4')->nullable();
                $table->string('given_ans')->nullable();
                $table->string('correct_ans');
                $table->timestamps();
                $table->foreign('subject_id')
                ->references('id')->on('subjects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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