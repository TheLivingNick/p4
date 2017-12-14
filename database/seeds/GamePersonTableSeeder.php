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
        # First, create an array of all the books we want to associate tags with
        # The *key* will be the book title, and the *value* will be an array of tags.
        # Note: purposefully omitting the Harry Potter books to demonstrate untagged books
        $persons =[
            'TheLivingNick' => ['Settlers of Catan', 'D&D 5th Edition', 'Overwatch', 'Horizon: Zero Dawn']
        ];

        # Now loop through the above array, creating a new pivot for each book to tag
        foreach ($persons as $username => $games) {

            # First get the book
            $person = Person::where('username', 'like', $username)->first();

            # Now loop through each tag for this book, adding the pivot
            foreach ($games as $gameName) {
                $game = Game::where('name', 'LIKE', $gameName)->first();

                # Connect this game to this person
                $person->games()->save($game);
            }
        }
    }
}
