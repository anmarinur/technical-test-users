<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saved_users', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('city');
            $table->integer('phone');
            $table->string('name-company');
            $table->date('birthdate');
            $table->string('picture');
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
        //
    }
};
