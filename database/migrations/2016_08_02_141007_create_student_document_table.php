<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_document', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('document_id')->unsigned()->index();
            $table->integer('student_task_id')->unsigned()->index();
            $table->string('description')->nullable();
            $table->timestamps();

            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
            $table->foreign('student_task_id')->references('id')->on('student_task')->onDelete('cascade');

            $table->unique(['document_id', 'student_task_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student_document');
    }
}
