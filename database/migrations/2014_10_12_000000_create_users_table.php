<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->increments('id');

            $table->string('name');

            $table->string('email')->unique();

            $table->string('password');

            $table->string('provider')->nullable();

            $table->string('provider_id')->unique()->nullable();

            $table->datetime('registered_at')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            
            $table->string('api_token', 60)->unique()->nullable();

            $table->rememberToken();

            $table->timestamps();

        });

        Schema::create('roles', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name');

            $table->timestamps();

        });

        Schema::create('role_user', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');

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
        Schema::drop('users');
        
        Schema::dropIfExists('role_user');
        
        Schema::dropIfExists('roles');
        
    }
}
