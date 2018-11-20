<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActivities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });

        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('session_id')->nullable();
            $table->integer('action_id')->unsigned()->nullable();
            $table->string('model_name')->nullable();
            $table->integer('model_id')->nullable()->unsigned();
            $table->string('mims_reference')->nullable();
            $table->string('keyword')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->string('location')->nullable();
            $table->string('device')->nullable()->comment('web|mobile');
            $table->date('date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('action_id')->references('id')->on('actions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actions');
        Schema::dropIfExists('activities');
    }
}
