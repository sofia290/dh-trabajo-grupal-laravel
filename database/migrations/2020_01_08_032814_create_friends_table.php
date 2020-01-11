<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id1');
            $table->foreign('user_id1')->references('id')->on('users');
            $table->unsignedBigInteger('user_id2');
            $table->foreign('user_id2')->references('id')->on('users');
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
        Schema::table("friends",function(Blueprint $table) {
          $table->dropForeign('friends_user_id1_foreign');
          $table->dropForeign('friends_user_id2_foreign');

        });
        Schema::dropIfExists('friends');
    }
}
