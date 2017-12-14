<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function events()
    {
        # Location has many Events
        # Define a one-to-many relationship.
        return $this->hasMany('App\Event');
    }

    public function newsitems()
    {
        # Location has many newsitems
        # Define a one-to-many relationship.
        return $this->hasMany('App\Newsitem');
    }
}
