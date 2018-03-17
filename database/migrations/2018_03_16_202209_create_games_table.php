<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('homeId');
            $table->integer('awayId');
            $table->integer('stadiumId');
            $table->integer('typeId');
            $table->date('day');
            $table->time('time');
            $table->integer('goalsHome');
            $table->integer('goalsAway');
            $table->integer('cardsYellow');
            $table->integer('cardsRed');
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
        Schema::dropIfExists('games');
    }
}
