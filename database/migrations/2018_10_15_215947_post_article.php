<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        //
        Schema::create('article_posts', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('title');
            $table->longText('content');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->tinyInteger('status')->dafault(0)->comment('0=draf,1=publish,2=reject');
            $table->longText('featured_images')->comment('json type');
            $table->dateTime('publish_date')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('user_id')
            ->references('id')->on('users');
            $table->foreign('category_id')
            ->references('id')->on('post_categories')->onDelete('cascade');
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
        Schema::dropIfExists('article_posts');

    }
}
