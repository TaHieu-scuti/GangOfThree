<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('fullname');
            $table->string('avatar')->nullable();
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('dob')->nullable();
            $table->string('status')->default(1)->comment('1: active, 2: unActive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fullname');
            $table->dropColumn('avatar');
            $table->dropColumn('facebook');
            $table->dropColumn('skype');
            $table->dropColumn('dob');
            $table->dropColumn('status');
        });
    }
}
