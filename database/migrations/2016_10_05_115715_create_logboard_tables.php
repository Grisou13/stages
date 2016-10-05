<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogboardTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
        });
        Schema::create('tasks',function(Blueprint $table){
            $table->increments('id');
            $table->text('description');
            $table->text('comment');
            $table->date('start');
            $table->date('finish')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('status_id');
            $table->foreign('status_id')->references('id')->on('status');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('status');
        Schema::dropIfExists('tasks');

        Schema::enableForeignKeyConstraints();
    }
}
