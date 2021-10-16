<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSessions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sessions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('ip_address');
            $table->string('user_agent');
            $table->string('platform');
            $table->string('browser');
            $table->string('device');
            $table->string('os');
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('timezone');
            $table->string('currency');
            $table->string('language');            
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
        Schema::dropIfExists('user_sessions');
    }
}
