<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commentator_id')->unsigned()->index();
            $table->integer('student_document_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('commentator_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('student_document_id')->references('id')->on('student_document')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
