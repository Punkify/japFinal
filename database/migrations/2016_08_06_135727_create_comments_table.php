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
            $table->integer('document_student_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('commentator_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('document_student_id')->references('id')->on('document_student')->onDelete('cascade');

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
