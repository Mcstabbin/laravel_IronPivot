<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            schema::create('friends', function(Blueprint $table) 
            {
                $table->increments('id');
            $table->integer('user_id');
            $table->integer('friend_id');
            $table->boolean('accepted')->default('0');
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
            Schema::drop('friends');
    }
}