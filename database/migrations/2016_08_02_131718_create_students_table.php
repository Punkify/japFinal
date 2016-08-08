<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('id')->unsigned()->index();
            $table->integer('age');
            $table->string('country');
            $table->string('city');
            $table->string('course');
            $table->integer('consultancy_id')->nullable()->unsigned()->index();
            $table->timestamps();

            $table->primary('id');

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('consultancy_id')->references('id')->on('consultancies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
