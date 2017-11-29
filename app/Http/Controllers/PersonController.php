<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
    * Display the main homepage for the site
    * GET /
    */
    public function __invoke()
    {
        return view('person.profile');
    }
}
