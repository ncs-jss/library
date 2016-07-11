<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /Schema::create('queries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->length(25);
            $table->string('query')->length(10000);
            $table->string('reply')->length(10000);
            $table->string('subject')->length(200);
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
        Schema::drop('queries');
    }
}
