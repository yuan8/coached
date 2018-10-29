<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserLeaguage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         //
        Schema::create('user_languages', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('language_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')->on('users');
             $table->foreign('language_id')
            ->references('id')->on('languages')->onDelete('cascade');
        
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
        Schema::dropIfExists('user_languages');
        
    }
}
