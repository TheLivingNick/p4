<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
          ['1', 'Magic: The Gathering - Modern', '2017-05-09', '18:30:00', '5.00', 'Come play your Magic Modern deck on Tuesday night! Prize is store credit based on attendance.', 'http://www.pandemoniumbooks.com/page/events/#event%7Cmagic-the-gathering-modern%7C13050'],
          ['1', 'Magic: The Gathering - Vintage', '2017-05-09', '18:30:00', '5.00', 'Come play your vintage decks on Tuesday night! This event is unsanctioned and allows unlimited proxies. Prize is store credit based on attendance.', 'http://www.pandemoniumbooks.com/page/events/#event%7Cmagic-the-gathering-vintage%7C13213'],
        ];

        foreach ($events as $key => $event) {
          Event::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'location_id' => $event[0],
              'name' => $event[1],
              'date' => $event[2],
              'timeStart' => $event[3],
              'cost' => $event[4],
              'description' => $event[5],
              'url' => $event[6]
          ]);
        }
    }
}
