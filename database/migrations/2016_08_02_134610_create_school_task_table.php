<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_task', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->unsigned()->index();
            $table->integer('session_id')->unsigned()->index();
            $table->integer('task_id')->unsigned()->index();
            $table->string('description');
            $table->timestamps();

            $table->foreign('school_id')->references('school_id')->on('school_session')->onDelete('cascade');
            $table->foreign('session_id')->references('session_id')->on('school_session')->onDelete('cascade');
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');

            $table->unique(['school_id', 'session_id', 'task_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('school_task');
    }
}
