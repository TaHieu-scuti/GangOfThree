<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentClassExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_class_exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id');
            $table->integer('student_id');
            $table->integer('lession_id');
            $table->string('excercise_submission_url', 500)->nullable();
            $table->integer('evaluation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_class_exercises');
    }
}
