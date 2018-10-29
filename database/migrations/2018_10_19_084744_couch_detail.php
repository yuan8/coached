<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CouchDetail extends Migration
{
   
    public function up()
    {
        

        Schema::create('coach_details',function(Blueprint $table){
            $table->bigIncrements('id')->index();
            $table->mediumText('description')->nullable();
            $table->mediumText('opener_video')->nullable();
            $table->bigInteger('coach_id')->unsigned();
            $table->timestamps();

            $table->foreign('coach_id')
                ->references('id')->on('users');
                
        });
    }

   
    public function down()
    {
        
        Schema::dropIfExists('coach_details');

    }
}
