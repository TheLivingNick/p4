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
        $persons =[
            'TheLivingNick' => ['1']
        ];

        foreach ($persons as $username => $events) {

            $person = Person::where('username', 'like', $username)->first();

            foreach ($events as $event_id) {
                $event = Event::where('id', 'LIKE', $event_id)->first();

                $person->events()->save($event);
            }
        }
    }
}
