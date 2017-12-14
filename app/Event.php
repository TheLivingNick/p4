<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function location()
    {
        # Event belongs to Location
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Location');
    }

    public function persons()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Person')->withTimestamps();
    }
}
