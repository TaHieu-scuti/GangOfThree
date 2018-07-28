<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manager_id');
            $table->string('name', 100);
            $table->date('start_date');
            $table->date('stop_date');
            $table->text('desciption')->nullable();
            $table->integer('price')->nullable();
            $table->string('tags')->nullable();
            $table->boolean('status')->default(1)->comment('1: active, 2: unActive');
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
        Schema::dropIfExists('classes');
    }
}
