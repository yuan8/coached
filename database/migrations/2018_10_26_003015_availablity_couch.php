<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AvailablityCouch extends Migration
{
   
   
   

    public function up()
    
   {
        //

        Schema::create('coach_availabilities',function(Blueprint $table){
            $table->bigIncrements('id')->index();
            $table->integer('day_code');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->bigInteger('coach_id')->unsigned();
            $table->timestamps();
            $table->foreign('coach_id')
                ->references('id')->on('users');
              
        });
    }

    public function down()
    {
        //
        Schema::dropIfExists('coach_availabilities');

    
    }
}
