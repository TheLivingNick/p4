<?php

use Illuminate\Database\Seeder;
use App\Newsitem;

class NewsitemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsitems = [
          ['1', '"Above and Below" board game review', 'http://www.pandemoniumbooks.com/blog/post/17508/Above-and-Below/'],
          ['1', 'Retrospective—Arkham Horror: Song of the Black Goat', 'http://www.pandemoniumbooks.com/blog/post/17174/Retrospective%E2%80%94Arkham-HorrorSong-of-the-Black-Goat/'],
          ['1', '"Machi Koro" card game review', 'http://www.pandemoniumbooks.com/blog/post/16846/Machi-Koro/'],
        ];

        foreach ($newsitems as $key => $newsitem) {
          Newsitem::insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'location_id' => $newsitem[0],
              'name' => $newsitem[1],
              'url' => $newsitem[2]
          ]);
        }
    }
}
