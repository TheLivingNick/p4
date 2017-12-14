<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
          ['Pandemonium', '\images\pandemonium_title.png', '\images\pandemonium_storefront.png', '4 Pleasant St', '', 'Cambridge', 'MA', '02139', '617-547-3721', 'http://www.pandemoniumbooks.com/', 'A sci-fi and fantasy books store that also has a strong gaming section, carrying everything from manuals and figures to boardgames. Runs regular gaming meet-ups and events.', '0', '0', '1', '1']
        ];

        foreach ($locations as $key => $location) {
          Location::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'name' => $location[0],
              'title_image' => $location[1],
              'photo_image' => $location[2],
              'street1' => $location[3],
              'street2' => $location[4],
              'city' => $location[5],
              'state' => $location[6],
              'zip' => $location[7],
              'phone' => $location[8],
              'site' => $location[9],
              'summary' => $location[10],
              'interest_pc' => $location[11],
              'interest_console' => $location[12],
              'interest_tabletop' => $location[13],
              'interest_board' => $location[14],
          ]);
        }
    }
}
