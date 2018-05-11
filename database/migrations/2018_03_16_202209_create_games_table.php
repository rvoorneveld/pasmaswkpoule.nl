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
            $table->date('date');
            $table->time('time');
            $table->integer('goalsHome')->nullable();
            $table->integer('goalsAway')->nullable();
            $table->integer('cardsYellow')->nullable();
            $table->integer('cardsRed')->nullable();
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
