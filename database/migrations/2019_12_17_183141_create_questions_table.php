<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('points');
            $table->string('text');
            $table->boolean('verified')->default(true);
            $table->string('created_by')->default('admin');
            $table->string('sources')->nullable();
            $table->unsignedBigInteger('game_mode_id');
            $table->timestamps();

            $table->foreign('game_mode_id')->references('id')->on('game_modes')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table("questions",function(Blueprint $table) {
          $table->dropForeign('questions_game_mode_id_foreign');

        });
        Schema::dropIfExists('questions');
    }
}
