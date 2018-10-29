<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostComent extends Migration
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
        Schema::create('post_comments', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->longText('content');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('post_id')->unsigned();

            $table->longText('images')->comment('json type');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('user_id')
            ->references('id')->on('users');

             $table->foreign('post_id')
            ->references('id')->on('article_posts')->onDelete('cascade');
        
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
        Schema::dropIfExists('post_comments');
        
    }
}
