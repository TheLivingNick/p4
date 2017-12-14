@extends('layouts.master')

@section('bodytag')

<body id='location_profile'>

@endsection

@section('content')

    <h2><span class="first_letter">L</span>ocations</h2>
    <hr />
    <h2 id="location_name"><span class="first_letter">{{ $nameFirstLetter }}</span>{{ $nameTheRest }}<br/></h2>
    <h4 id="location_address">{{ $location->street1 }}
        <?php echo ($location->street2) ? "<br/>" : '' ?>
        {{ ($location->street2) ? $location->street2 : ''}}
        <br/>{{ $location->city }}, {{ $location->state }} {{ $location->zip }}
        <br/><br/>{{ $location->phone }}
        <br/><a href="{{ $location->site }}" target="_blank">Website</a></h4> <!-- uses php tag to insert br, double-brackets for the rest -->

    <a href="{{ $location->site }}" target="_blank"><img src="{{ $location->title_image }}" width="500" height="139" alt="{{ $location->name }} Title" /></a>
    <a href="{{ $location->site }}" target="_blank"><img src="{{ $location->photo_image }}" width="500" height="292" alt="{{ $location->name }} Photo" /></a>

    <div class="boxed">
        <h3><span class="first_letter">D</span>escription</h3>
        <hr />
        <p>
            {{ $location->summary }}
        </p>
    </div>

    <div class="boxed">
        <h3><span class="first_letter">L</span>ocation</h3>
        <hr />
        <p>The full version of the site would have an interactive map. For now, it is just a screenshot of the map that links to the Google Map of the address.</p>
        <br/>
        <a href="https://www.google.com/maps/place/4+Pleasant+St,+Cambridge,+MA+02139/@42.3660936,-71.1077887,17z/data=!3m1!4b1!4m5!3m4!1s0x89e377512374f555:0xa4ee3c102ca41c84!8m2!3d42.3660936!4d-71.1056"><img src="images/pandemonium_map.png" alt="Pandemonium Map"/></a>
    </div>

    <div class="boxed">
        <h3><span class="first_letter">N</span>ews</h3>
        <hr />
        <p>This would be a listing of annoucments and news that isn't necessarily tied to a specific event.</p>
        <ul>
        @foreach($locationNewsitems as $key => $newsitem)
            <li><a href="{{ $newsitem->url }}">{{ $newsitem->name }}</a></li>
        @endforeach
        </ul>
    </div>

    <div class="boxed">
        <h3><span class="first_letter">E</span>vents</h3>
        <hr />
        <p>This is a listing of some of the upcoming events, with an option to "follow" the event, adding it to the list that would appear on the user's Events page. A full listing of the location's events can be found at <a href="{{ $location->site }}" target="_blank">their site</a>.</p>
        <br/>
        <table>
            <tr>
                <th>Event</th><th>Date & Time</th><th>Cost</th><th>Description</th><th class="ach_img"></th>
            </tr>
            @foreach($locationEvents as $key => $event)
            <tr>
                <td><a href="{{ $event->url }}">{{ $event->name }}</a></td>
                <td>{{ $event->date }} @ {{ $event->timeStart }}</td>
                <td>${{ $event->cost }}</td>
                <td>{{ $event->description }}</td>
                <td class="ach_img"><form action="#" method="post"><input type='submit' value='Follow'></form></td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection
