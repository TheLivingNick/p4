<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Game;

class PersonController extends Controller
{
/**
* Display the main homepage for the site
* GET /
*/
    public function show()
    {
        $person = Person::where('id', '=', '1')->first();

        $personInterests = ['PC' => $person->interest_pc,
            'Console' => $person->interest_console,
            'Tabletop' => $person->interest_tabletop,
            'Board' => $person->interest_pc];

        $personGames = [];

        foreach($person->games->toarray() as $game) {
            $personGames[] = $game;
        }

        $personEvents = [];

        foreach($person->events->toarray() as $event) {
            $personEvents[] = $event;
        }

        if (!$person) {
            return redirect('/error404');
        }

        $firstnameFirstLetter = $person->firstname[0];
        $firstnameTheRest = substr($person->firstname, 1);
        $lastnameFirstLetter = $person->lastname[0];
        $lastnameTheRest = substr($person->lastname, 1);

        $favoritePC = [];
        foreach($personGames as $game) {
            if ($game['type'] == 'pc'){
                $favoritePC[] = $game;
            }
        }

        $favoriteConsole = [];
        foreach($personGames as $game) {
            if ($game['type'] == 'console'){
                $favoriteConsole[] = $game;
            }
        }

        $favoriteTabletop = [];
        foreach($personGames as $game) {
            if ($game['type'] == 'tabletop'){
                $favoriteTabletop[] = $game;
            }
        }

        $favoriteBoard = [];
        foreach($personGames as $game) {
            if ($game['type'] == 'board'){
                $favoriteBoard[] = $game;
            }
        }

        return view('person.profile')->with([
            'firstnameFirstLetter' => $firstnameFirstLetter,
            'firstnameTheRest' => $firstnameTheRest,
            'lastnameFirstLetter' => $lastnameFirstLetter,
            'lastnameTheRest' => $lastnameTheRest,
            'person' => $person,
            'personGames' => $personGames,
            'personEvents' => $personEvents,
            'personInterests' => $personInterests,
            'favoritePC' => $favoritePC,
            'favoriteConsole' => $favoriteConsole,
            'favoriteTabletop' => $favoriteTabletop,
            'favoriteBoard' => $favoriteBoard
        ]);
    }

    public function edit(Request $request)
    {
        $person = Person::where('id', '=', '1')->first();

        if (!$person) {
            return redirect('/error404');
        }

        $gamesForDropdown = Game::getForDropdown();
        $gamesForCheckboxes = Person::getGamesForCheckboxes($person);

        return view('person.edit')->with([
            'person' => $person,
            'gamesForDropdown' => $gamesForDropdown,
            'gamesForCheckboxes' => $gamesForCheckboxes
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|alpha_num|min:3|max:30',
            'firstname' => 'required|alpha|min:1|max:30',
            'lastname' => 'required|alpha|min:1|max:30',
            'street1' => 'required|regex:/[\w\s]+/|min:1|max:30',
            'street2' => 'regex:/[\w\s]+/|min:1|max:30',
            'city' => 'required|alpha|min:1|max:30',
            'state' => 'required|alpha|min:2|max:2',
            'zip' => 'required|numeric',
            'summary' => 'required|regex:/[\w\s]+/|max:2000',
        ]);

        $person = Person::where('id', '=', '1')->first();

        $person->username = $request->username;
        $person->firstname = $request->firstname;
        $person->lastname = $request->lastname;
        $person->street1 = $request->street1;
        $person->street2 = $request->street2;
        $person->city = $request->city;
        $person->state = $request->state;
        $person->zip = $request->zip;
        $person->summary = $request->summary;
        ($request->interest_pc == 'on') ? $person->interest_pc = 1 : $person->interest_pc=0;
        ($request->interest_console == 'on') ? $person->interest_console = 1 : $person->interest_console = 0;
        ($request->interest_tabletop == 'on') ? $person->interest_tabletop = 1 : $person->interest_tabletop = 0;
        ($request->interest_board == 'on') ? $person->interest_board = 1 : $person->interest_board = 0;

        $person->save();

        return redirect('/profile');
    }

    public function deleteGame(Request $request)
    {
        $game_id =

        $person = Person::where('id', '=', '1')->first();

        $game = Game::where();

        $person->username = $request->username;
        $person->firstname = $request->firstname;
        $person->lastname = $request->lastname;
        $person->street1 = $request->street1;
        $person->street2 = $request->street2;
        $person->city = $request->city;
        $person->state = $request->state;
        $person->zip = $request->zip;
        $person->summary = $request->summary;
        ($request->interest_pc == 'on') ? $person->interest_pc = 1 : $person->interest_pc=0;
        ($request->interest_console == 'on') ? $person->interest_console = 1 : $person->interest_console = 0;
        ($request->interest_tabletop == 'on') ? $person->interest_tabletop = 1 : $person->interest_tabletop = 0;
        ($request->interest_board == 'on') ? $person->interest_board = 1 : $person->interest_board = 0;

        $person->save();

        return redirect('/profile');
    }
}
