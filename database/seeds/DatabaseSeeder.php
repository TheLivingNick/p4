<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PersonsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(NewsitemsTableSeeder::class);
        $this->call(GamePersonTableSeeder::class);
        $this->call(EventPersonTableSeeder::class);
    }
}
