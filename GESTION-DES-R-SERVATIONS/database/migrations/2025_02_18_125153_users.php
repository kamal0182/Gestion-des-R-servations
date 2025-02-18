<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        schema::create('users',function(Blueprint  $table){
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number');
            $table->integer('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }


    public function down()
    {
        schema::drop('users');
    }
};
 // schema::deke
