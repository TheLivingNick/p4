<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsitem extends Model
{
    public function location()
    {
        # Newsitem belongs to Location
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Location');
    }
}
