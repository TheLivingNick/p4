<?php

use Illuminate\Database\Seeder;
use App\Event;
use App\Person;

class EventPersonTableSeeder extends Seeder
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
            'TheLivingNick' => ['1']
        ];

        # Now loop through the above array, creating a new pivot for each book to tag
        foreach ($persons as $username => $events) {

            # First get the book
            $person = Person::where('username', 'like', $username)->first();

            # Now loop through each tag for this book, adding the pivot
            foreach ($events as $event_id) {
                $event = Event::where('id', 'LIKE', $event_id)->first();

                # Connect this game to this person
                $person->events()->save($event);
            }
        }
    }
}
