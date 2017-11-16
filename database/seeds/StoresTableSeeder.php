<?php

use Illuminate\Database\Seeder;
use App\Store;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $stores = [
        ['Pandemonium', '\inages\pandemonium_storefront.png', '4 Pleasant St', '', 'Cambridge', 'MA', '02474', 'Text about the store', '0', '0', '1', '1', 'Event1', 'Event2', 'Event3']
      ];

      foreach ($stores as $key => $store) {
        Store::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => $store[0],
            'cover_image' => $store[1],
            'street1' => $store[2],
            'street2' => $store[3],
            'city' => $store[4],
            'state' => $store[5],
            'zip' => $store[6],
            'summary' => $store[7],
            'interest_pc' => $store[8],
            'interest_console' => $store[9],
            'interest_tabletop' => $store[10],
            'interest_board' => $store[11],
            'event1' => $store[12],
            'event2' => $store[13],
            'event3' => $store[14],
        ]);
      }
    }
}
