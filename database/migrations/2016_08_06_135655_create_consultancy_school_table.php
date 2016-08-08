
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultancySchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultancy_school', function (Blueprint $table) {
            $table->integer('consultancy_id')->unsigned()->index();
            $table->integer('school_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('consultancy_id')->references('id')->on('consultancies')->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');

            $table->primary(['consultancy_id', 'school_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('consultancy_school');
    }
}
