@extends('layouts.master')

@section('bodytag')

  <body id='home'>

@endsection

@section('content')

  <div id="welcome" class="boxed">
    <h2><span class="first_letter">W</span>elcome!</h2>
    <hr/>
    <p>
        Welcome to GameNeighbor! This site aims to be the central node for your life as a gamer, and strives to provide you with a number of tools.
    </p>

    <ul>
        <li>A complete profile for you, under your control, separate from any single company or platform, or even type of gaming: PC, console, tabletop and board games are all welcome here!</li>
        <li>The ability to find other gamers based on location and interest, so you can find new friends</li>
        <li>Pages for local businesses, to help you find gaming establishments near you and keep track of what is happening there</li>
        <li>Listing of events in your area, which you can track to keep up on the latest developments</li>
    </ul>
    <p>
    We want to provide a place that is friendly to all gamers, and lets you customize things to your desire. Welcome again, and we home you find a home here!
    </p>
  </div>
  <div id="front_slides">
    <div class="slideshow">
        <img src="images/slide_pc.png" width="300" height="300" alt="PC slide" />
        <img src="images/slide_dice.png" width="300" height="300" alt="Dice slide" />
        <img src="images/slide_console.png" width="300" height="300" alt="Console slide" />
        <img src="images/slide_board.png" width="300" height="300" alt="Board Game slide" />
    </div>
  </div>
  <div class="boxed">
    <h3><span class="first_letter">E</span>vents</h3>
    <hr/>
    <p>
        In the final version of the site, the user would be able to tag events listed by stores and organizations, or create custom entries in their calendar. The next three events to happen would be listed on their home page. Clicking on the events listed would bring you to pages for those events.
    </p>
    <ul>
        <li>May 8 @ 6:30 pm: X-Wing Quarter 2 Kit Tournament at Pandemonium</li>
        <li>May 9 @ 6:00 pm: CS-E12 Final Project due</li>
        <li>May 9 @ 6:45 pm: Star Wars Destiny Weekly Tournament at Pandemonium</li>
    </ul>
  </div>

@endsection
