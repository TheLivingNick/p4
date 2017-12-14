@extends('layouts.master')

@section('bodytag')

<body id='person_profile'>

@endsection

@section('content')
    <h2><span class="first_letter">E</span>dit <span class="first_letter">P</span>rofile</h2>
    <hr />

    <form id='editperson' method='POST' action='/profile'>

        {{ method_field('put') }}

        {{ csrf_field() }}

        <div>* Required fields</div>

        <br/>
        <label for='username'>* Username</label>
        <input type='text' name='username' id='username' value='{{ old('username', $person->username) }}'>
        @include('modules.error-field', ['fieldName' => 'username'])
        <br/>

        <label for='firstname'>* First Name</label>
        <input type='text' name='firstname' id='firstname' value='{{ old('firstname', $person->firstname) }}'>
        @include('modules.error-field', ['fieldName' => 'firstname'])
        <br/>

        <label for='published'>* Last Name</label>
        <input type='text' name='lastname' id='lastname' value='{{ old('lastname', $person->lastname) }}'>
        @include('modules.error-field', ['fieldName' => 'lastname'])
        <br/>

        <label for='street1'>* Street 1</label>
        <input type='text' name='street1' id='street1' value='{{ old('street1', $person->street1) }}'>
        @include('modules.error-field', ['fieldName' => 'street1'])
        <br/>

        <label for='street2'>* Street 2</label>
        <input type='text' name='street2' id='street2' value='{{ old('street2', $person->street2) }}'>
        @include('modules.error-field', ['fieldName' => 'street2'])
        <br/>

        <label for='city'>* City</label>
        <input type='text' name='city' id='city' value='{{ old('city', $person->city) }}'>
        @include('modules.error-field', ['fieldName' => 'city'])
        <br/>

        <label for='state'>* State</label>
        <input type='text' name='state' id='state' value='{{ old('state', $person->state) }}'>
        @include('modules.error-field', ['fieldName' => 'state'])
        <br/>

        <label for='zip'>* Zip Code</label>
        <input type='text' name='zip' id='zip' value='{{ old('zip', $person->zip) }}'>
        @include('modules.error-field', ['fieldName' => 'zip'])
        <br/>

        <label for='summary'>* Summary</label><br/>
        <textarea cols='100' rows='10' name='summary' id='summary' value='{{ old('summary', $person->summary) }}'>{{ old('summary', $person->summary) }}</textarea>
        @include('modules.error-field', ['fieldName' => 'summary'])
        <br/>
        <br/>
        <h4>Check off areas of interest:</h4>

        <label for='interest_pc'>PC Games:</label>
        <input type='checkbox' name='interest_pc' id='interest_pc'
            {{ ($person->interest_pc) ? 'CHECKED' : '' }}
        >

        <label for='interest_console'>Console Games:</label>
        <input type='checkbox' name='interest_console' id='interest_console'
            {{ ($person->interest_console) ? 'CHECKED' : '' }}
        >

        <label for='interest_tabletop'>Tabletop Games:</label>
        <input type='checkbox' name='interest_tabletop' id='interest_tabletop'
            {{ ($person->interest_tabletop) ? 'CHECKED' : '' }}
        >

        <label for='interest_board'>Board Games:</label>
        <input type='checkbox' name='interest_board' id='interest_board'
            {{ ($person->interest_board) ? 'CHECKED' : '' }}
        >
        <br/>

        <input type='submit' value='Update profile' class='btn btn-primary btn-small'>
    </form>

    <br/><br/>

    <form id='editperson' method='POST' action='/profile'>

        {{ method_field('delete') }}

        {{ csrf_field() }}

        <h4>Favorite Games:</h4>

        @foreach ($gamesForCheckboxes as $id => $name)
            <input type='checkbox' value='{{ $name }}' name='{{ $name }}'>
            {{ $name }} <br>
        @endforeach

        <input type='submit' value='Remove games' class='btn btn-primary btn-small'>
    </form>

        <select name='gamesList' id='gamesList'>
            @foreach($gamesForDropdown as $id => $game)
                <option>{{ $game }}</option>
            @endforeach
        </select>


    </form>

@endsection
