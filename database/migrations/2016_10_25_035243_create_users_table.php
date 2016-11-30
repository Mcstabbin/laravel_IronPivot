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
        schema::create('users', function(Blueprint $table) {

          $table->increments('id')->nullable();
          $table->string('email')->nullable();
          $table->string('username')->unique();
          $table->string('password')->nullable();
          $table->string('first_name')->nullable();
          $table->string('last_name')->nullable();
          $table->string('location')->nullable();
          $table->string('remember_token')->nullable();
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
        schema::drop('users');
    }
}

