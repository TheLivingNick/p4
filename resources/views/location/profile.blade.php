@extends('layouts.master')

@section('bodytag')

  <body id='location_profile'>

@endsection

@section('content')

  <h2><span class="first_letter">L</span>ocations</h2>
  <hr />
  <h2 id="location_name"><span class="first_letter">P</span>andemonium<br/><span class="first_letter">B</span>ooks & <span class="first_letter">G</span>ames</h2>
  <h4 id="location_address">4 Pleasant Street<br/>Cambridge, MA 02139</h4>
  <div id="location_hours">
      <h5>Monday: Noon-10pm</h5>
      <h5>Tuesday: Noon-10pm</h5>
      <h5>Wednesday: Noon-10pm</h5>
      <h5>Thursday: Noon-10pm</h5>
      <h5>Friday: Noon-10pm</h5>
      <h5>Saturday: 10am-10pm</h5>
      <h5>Sunday: Noon-10pm</h5>
  </div>

  <a href="http://www.pandemoniumbooks.com/"><img src="images/pandemonium_title.png" width="500" height="139" alt="Pandemonium Title" /></a>
  <a href="http://www.pandemoniumbooks.com/"><img src="images/pandemonium_storefront.png" width="500" height="292" alt="Pandemonium Storefront" /></a>

  <div class="boxed">
      <h3><span class="first_letter">S</span>tore <span class="first_letter">D</span>escription</h3>
      <hr />
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor sem felis, quis dapibus turpis porttitor hendrerit. Cras vitae neque tempor, cursus ante eget, interdum lorem. Cras tempus ipsum a facilisis fringilla. Donec pulvinar venenatis lorem in rhoncus. Donec id dolor nibh. Nullam at volutpat libero. Integer neque libero, ornare ac metus cursus, pharetra pulvinar enim. Duis mi nulla, pellentesque a urna eu, tincidunt cursus nisl. Pellentesque dapibus lacus venenatis, fermentum erat nec, facilisis arcu. Proin suscipit ornare justo, sed consectetur dui tincidunt at. Fusce libero turpis, bibendum ut enim sed, laoreet pretium est. Pellentesque sit amet commodo tellus. Nulla finibus euismod consectetur. Donec vitae ultricies ipsum, vitae tempor dui. Maecenas fringilla, orci ut hendrerit tempor, quam ipsum mollis augue, a ullamcorper lectus risus nec lacus. Curabitur et ex augue.
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
          <li><a href="http://www.pandemoniumbooks.com/blog/post/17508/Above-and-Below/">"Above and Below" board game review</a></li>
          <li><a href="http://www.pandemoniumbooks.com/blog/post/17174/Retrospective%E2%80%94Arkham-HorrorSong-of-the-Black-Goat/">Retrospective—Arkham Horror: Song of the Black Goat</a></li>
          <li><a href="http://www.pandemoniumbooks.com/blog/post/16846/Machi-Koro/">"Machi Koro" card game review</a></li>
      </ul>
  </div>
  <div class="boxed">
      <h3><span class="first_letter">E</span>vents</h3>
      <hr />
      <p>This is a listing of some of the upcoming events, with an option to "follow" the event, adding it to the list that would appear on the user's Events page. A full listing of the location's events can be found at <a href="http://www.pandemoniumbooks.com/page/events/">their calendar</a>.</p>
      <br/>
      <table>
          <tr>
              <th>Event</th><th>Date & Time</th><th>Cost</th><th>Description</th><th class="ach_img"></th>
          </tr>
          <tr>
              <td><a href="http://www.pandemoniumbooks.com/page/events/#event%7Cmagic-the-gathering-modern%7C13050">Magic: The Gathering - Modern</a></td><td>May 9, 2017 @ 6:30pm–10:45pm</td><td>$5.00</td><td>Come play your Magic Modern deck on Tuesday night!  Prize is store credit based on attendance.</td><td class="ach_img"><form action="#" method="post"><input type='submit' value='Follow'></form></td>
          </tr>
          <tr>
              <td><a href="http://www.pandemoniumbooks.com/page/events/#event%7Cmagic-the-gathering-vintage%7C13213">Magic: The Gathering - Vintage</a></td><td>May 9, 2017 @ 6:30pm</td><td>$5.00</td><td>Come play your vintage decks on Tuesday night! This event is unsanctioned and allows unlimited proxies. Prize is store credit based on attendance.</td><td class="ach_img"><form action="#" method="post"><input type='submit' value='Follow'></form></td>
          </tr>
      </table>
  </div>

@endsection
