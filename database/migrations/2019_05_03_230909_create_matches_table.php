<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tournament_id')->unsigned();
            $table->foreign('tournament_id')->references('id')->on('tournaments');
            $table->integer('venue_id')->unsigned();
            $table->foreign('venue_id')->references('id')->on('venues');
            $table->integer('team_1_id')->unsigned();
            $table->foreign('team_1_id')->references('id')->on('teams');
            $table->integer('team_2_id')->unsigned();
            $table->foreign('team_2_id')->references('id')->on('teams');
            $table->string('winning_team');
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
        Schema::dropIfExists('matches');
    }
}
