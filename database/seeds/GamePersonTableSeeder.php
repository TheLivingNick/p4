<?php

use Illuminate\Database\Seeder;
use App\Game;
use App\Person;

class GamePersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persons =[
            'TheLivingNick' => ['Settlers of Catan', 'D&D 5th Edition', 'Overwatch', 'Horizon: Zero Dawn']
        ];

        foreach ($persons as $username => $games) {

            $person = Person::where('username', 'like', $username)->first();

            foreach ($games as $gameName) {
                $game = Game::where('name', 'LIKE', $gameName)->first();

                $person->games()->save($game);
            }
        }
    }
}
