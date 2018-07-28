<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassLessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_lessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id');
            $table->string('descprition')->nullable();
            $table->string('lession_url')->nullable();
            $table->string('excercises_url')->nullable();
            $table->date('start_day')->nullable();
            $table->dateTime('excercises_deadline')->nullable();
            $table->string('youtube_url')->nullable();
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
        Schema::dropIfExists('class_lessions');
    }
}
