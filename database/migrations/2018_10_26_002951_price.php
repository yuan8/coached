<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Price extends Migration
{
   
    public function up()
    {
        //

        Schema::create('coach_prices',function(Blueprint $table){
            $table->bigIncrements('id')->index();
            $table->integer('in_minutes');
            $table->bigInteger('price');
            $table->mediumText('description')->nullable();
            $table->bigInteger('coach_id')->unsigned();
            $table->timestamps();

            $table->foreign('coach_id')
                ->references('id')->on('users');
               
        });
    }

   
    public function down()
    {
        //
        Schema::dropIfExists('coach_prices');

    
    }
}
