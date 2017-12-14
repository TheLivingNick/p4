<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Event;
use App\Newsitem;

class LocationController extends Controller
{
    public function show()
    {
        $location = Location::where('id', '=', '1')->first();
        $locationEvents = Event::where('location_id', '=', $location->id)->get();
        $locationNewsitems = Newsitem::where('location_id', '=', $location->id)->get();

        if (!$location) {
            return redirect('/error404');
        }

        $nameFirstLetter = $location->name[0];
        $nameTheRest = substr($location->name, 1);

        return view('location.profile')->with([
            'nameFirstLetter' => $nameFirstLetter,
            'nameTheRest' => $nameTheRest,
            'location' => $location,
            'locationEvents' => $locationEvents,
            'locationNewsitems' => $locationNewsitems
        ]);
    }
}
