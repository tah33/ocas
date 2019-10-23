<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->bigIncrements('ex_id');
            $table->unsignedBigInteger('student_id');
            $table->integer('mark');
            $table->time('time');
            $table->timestamps();
            $table->foreign('student_id')
                ->references('stu_id')->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
