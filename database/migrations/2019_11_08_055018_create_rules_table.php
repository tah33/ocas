<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('subject_id');
            $table->bigIncrements('department_id');
            $table->integer('range');
            $table->timestamps();
            $table->foreign('department_id')
                ->references('id')->on('departments')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('rules');
    }
}
