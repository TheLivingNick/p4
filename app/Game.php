<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function persons()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Person')->withTimestamps();
    }

    public static function getForDropdown()
    {
        $games = Game::orderBy('name')->get();
        $gamesForDropdown = [0 => 'Choose one...'];
        foreach ($games as $game) {
          $gamesForDropdown[] = $game->name;
        }

        return $gamesForDropdown;
    }
}
