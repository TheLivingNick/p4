<?php

use Illuminate\Database\Seeder;
use App\Game;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = [
          ['Settlers of Catan', 'board'],
          ['D&D 5th Edition', 'tabletop'],
          ['Overwatch', 'pc'],
          ['Horizon: Zero Dawn', 'console'],
        ];

        foreach ($games as $key => $game) {
          Game::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'name' => $game[0],
              'type' => $game[1]
          ]);
        }
    }
}
