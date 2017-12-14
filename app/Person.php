<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function events()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Event')->withTimestamps();
    }

    public function games()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Game')->withTimestamps();
    }

    public static function getGamesForCheckboxes($person)
    {
        $favoriteGames = $person->games()->orderBy('name')->get();

        $gamesForCheckboxes = [];

        foreach ($favoriteGames as $favoriteGame) {
            $gamesForCheckboxes[] = $favoriteGame->name;
        }

        return $gamesForCheckboxes;
    }
}
