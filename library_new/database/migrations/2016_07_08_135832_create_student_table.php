<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->length(25);
            $table->string('email');
            $table->integer('mobile')->length(10);
            $table->integer('admission_year')->length(4);
            $table->string('course');
            $table->string('branch');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('username')->references('username')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student');
    }
}
