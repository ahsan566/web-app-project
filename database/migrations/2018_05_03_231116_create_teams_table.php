<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('program');
            // $table->string('Player1');
            // $table->string('Player2');
            // $table->string('Player3');
            // $table->string('Player4');
            // $table->string('Player5');
            // $table->string('Player6');
            // $table->string('Player7');
            // $table->string('Player8');
            // $table->string('Player9');
            // $table->string('Player10');
            // $table->string('Player11');
            // $table->string('Player12');
            // $table->string('Player13');
            // $table->string('Player14');
            // $table->string('Player15');
            // $table->string('captain');
            // $table->string('vice_captain');
            // $table->string('keeper');
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
        Schema::dropIfExists('teams');
    }
}
