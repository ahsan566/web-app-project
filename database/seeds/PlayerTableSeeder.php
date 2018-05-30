<?php

use Illuminate\Database\Seeder;
use \App\Player;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $player = new Player();
        $player->name = 'Saad';
        $player->age = '23';
        $player->program = 'BSCS';
        $player->runs = '123';
        $player->wickets = '3';
        $player->save();

        $player = new Player();
        $player->name = 'Zubair';
        $player->age = '22';
        $player->program = 'BSAF';
        $player->runs = '134';
        $player->wickets = '6';
        $player->save();

        $player = new Player();
        $player->name = 'Usman';
        $player->age = '23';
        $player->program = 'BSCS';
        $player->runs = '59';
        $player->wickets = '10';
        $player->save();

    }
}
