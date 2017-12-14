@extends('layouts.master')

@section('bodytag')

<body id='person_profile'>

@endsection

@section('content')

    <h2><span class="first_letter">P</span>rofile</h2>
    <hr />
    <img src="{{ $person->profile_image }}" width="300" height="300" alt="Profile Pic"/>
    <h2 id="profile_name"><span class="first_letter">{{ $firstnameFirstLetter }}</span>{{ $firstnameTheRest }} <span class="first_letter">{{ $lastnameFirstLetter }}</span>{{ $lastnameTheRest }}</h2>
    <h4 id="profile_town">{{ $person->city }}, {{ $person->state }}</h4><br />

    <div class="boxed">
        <h3><span class="first_letter">P</span>ersonal <span class="first_letter">S</span>ummary</h3>
        <hr />
        <p>
            {{ $person->summary }}
        </p>
    </div>

    <div class="boxed">
        <h3><span class="first_letter">I</span>nterests</h3>
        <hr />
        <ul>
        @foreach($personInterests as $key => $interest)
            <?php echo ($interest) ? "<li>$key</li>" : '' ?>
        @endforeach
        </ul>
    </div>

    <div class="boxed">
        <h3><span class="first_letter">F</span>avorites</h3>
        <hr />
        <ul>
            @if ($personInterests['PC'])
                <li>PC:
                @foreach ($favoritePC as $key => $game)
                    {{ $game['name'].' | ' }}
                @endforeach
                </li>
            @endif
            @if ($personInterests['Console'])
                <li>Console:
                @foreach ($favoriteConsole as $key => $game)
                    {{ $game['name'].' | ' }}
                @endforeach
                </li>
            @endif
            @if ($personInterests['Tabletop'])
                <li>Tabletop:
                @foreach ($favoriteTabletop as $key => $game)
                    {{ $game['name'].' | ' }}
                @endforeach
                </li>
            @endif
            @if ($personInterests['Board'])
                <li>Board:
                @foreach ($favoriteBoard as $key => $game)
                    {{ $game['name'].' | ' }}
                @endforeach
                </li>
            @endif
        </ul>
    </div>

    <!-- Will update for DB integration later, getting the basics working for now -->
    <div class="boxed">
        <h3><span class="first_letter">G</span>allery</h3>
        <hr />
        <a class="fancybox" data-fancybox="gallery" href="images/20160405210415_1.jpg" title="...what?">
            <img src="images/20160405210415_1_thumb.jpg" alt="" />
        </a>
        <a class="fancybox" data-fancybox="gallery" href="images/20160405210616_1.jpg" title="Um...">
            <img src="images/20160405210616_1_thumb.jpg" alt="" />
        </a>
        <a class="fancybox" data-fancybox="gallery" href="images/20160405210838_1.jpg" title="Oh!">
            <img src="images/20160405210838_1_thumb.jpg" alt="" />
        </a>
        <a class="fancybox" data-fancybox="gallery" href="images/20160405210848_1.jpg" title="That's actually kind of sweet :)">
            <img src="images/20160405210848_1_thumb.jpg" alt="" />
        </a>
    </div>

    <!-- Will update for DB integration later, getting the basics working for now -->
    <div class="boxed">
        <h3><span class="first_letter">A</span>chievements</h3>
        <hr />
        <table>
            <tr>
                <th class="ach_img"></th><th class="ach_name">Achievement</th><th class="ach_game">Game</th><th class="ach_desc">Description</th>
            </tr>
            <tr>
                <td class="ach_img"><img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/337150/901da7123195e302295c9a3e5106ded57798ea03.jpg" alt="The Hero We Need"></td><td class="ach_name">The Hero We Need</td><td class="ach_game">Sentinels of the Multiverse</td><td class="ach_desc">Defeat all core game Villains</td>
            </tr>
            <tr>
                <td class="ach_img"><img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/205100/71959292f40384be94b4c00843e85398169074d4.jpg" alt="Clean Hands"></td><td class="ach_name">Clean Hands</td><td class="ach_game">Dishonored</td><td class="ach_desc">Complete the game without killing anyone</td>
            </tr>
        </table>
    </div>

@endsection
