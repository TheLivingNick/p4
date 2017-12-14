<?php

use Illuminate\Database\Seeder;
use App\Person;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $persons = [
        ['TheLivingNick', 'Nicholas', 'Troy', '\images\profile_pic.jpg', '1 Massachusetts Ave', 'Apt 101', 'Arlington', 'MA', '02474', 'This would be the basic text summary for my profile. It would outline who I am, what I want to say, and other things like that.', '1', '1', '1', '1', 'Overwatch', 'FF Tactics', 'D&D 3.5', 'Sentinels of the Multiverse',],
      ];

      foreach ($persons as $key => $person) {
        Person::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'username' => $person[0],
            'firstname' => $person[1],
            'lastname' => $person[2],
            'profile_image' => $person[3],
            'street1' => $person[4],
            'street2' => $person[5],
            'city' => $person[6],
            'state' => $person[7],
            'zip' => $person[8],
            'summary' => $person[9],
            'interest_pc' => $person[10],
            'interest_console' => $person[11],
            'interest_tabletop' => $person[12],
            'interest_board' => $person[13],
            'favorite_pc' => $person[14],
            'favorite_console' => $person[15],
            'favorite_tabletop' => $person[16],
            'favorite_board' => $person[17]
        ]);
      }
    }
}
