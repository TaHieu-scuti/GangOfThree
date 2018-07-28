<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_managers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->enum('type', ['premium', 'free'])->default('free');
            $table->string('degree', 100);
            $table->integer('class_limit')->default(5)->commnet('1 manager create limit 5 class');
            $table->integer('student_limit')->default(20)->commnet('1 class add limit 20 student');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('class_managers');
    }
}
