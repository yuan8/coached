<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->boolean('sex')->default(0)->comment('0=>man,1=woman');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('country_id')->nullable()->unsigned();
            $table->integer('state_id')->nullable()->unsigned();
            // $table->integer('city_id')->nullable()->unsigned();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('timezone')->nullable();
            $table->integer('active_status')->default(0);
            $table->string('api_token')->nullable();
            $table->integer('role')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('role')
            ->references('id')->on('roles');

            $table->foreign('country_id')
            ->references('id')->on('countries');

            $table->foreign('state_id')
            ->references('id')->on('states');

            // $table->foreign('city_id')
            // ->references('id')->on('cities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
