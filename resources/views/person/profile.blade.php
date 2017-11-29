@extends('layouts.master')

@section('bodytag')

  <body id='person_profile'>

@endsection

@section('content')

  <h2><span class="first_letter">P</span>rofile</h2>
  <hr />
  <img src="images/profile_pic.jpg" width="300" height="300" alt="Profile Pic"/>
  <h2 id="profile_name"><span class="first_letter">N</span>icholas <span class="first_letter">T</span>roy</h2>
  <h4 id="profile_town">Arlington, MA</h4><br />

  <div class="boxed">
      <h3><span class="first_letter">P</span>ersonal <span class="first_letter">S</span>ummary</h3>
      <hr />
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor sem felis, quis dapibus turpis porttitor hendrerit. Cras vitae neque tempor, cursus ante eget, interdum lorem. Cras tempus ipsum a facilisis fringilla. Donec pulvinar venenatis lorem in rhoncus. Donec id dolor nibh. Nullam at volutpat libero. Integer neque libero, ornare ac metus cursus, pharetra pulvinar enim. Duis mi nulla, pellentesque a urna eu, tincidunt cursus nisl. Pellentesque dapibus lacus venenatis, fermentum erat nec, facilisis arcu. Proin suscipit ornare justo, sed consectetur dui tincidunt at. Fusce libero turpis, bibendum ut enim sed, laoreet pretium est. Pellentesque sit amet commodo tellus. Nulla finibus euismod consectetur. Donec vitae ultricies ipsum, vitae tempor dui. Maecenas fringilla, orci ut hendrerit tempor, quam ipsum mollis augue, a ullamcorper lectus risus nec lacus. Curabitur et ex augue.
      </p>
      <p>
      Suspendisse condimentum tellus at urna pharetra, et sollicitudin dui semper. Curabitur elementum sapien quam, sed feugiat sem mattis at. In hac habitasse platea dictumst. Praesent ultricies nisl eu metus pellentesque, ac convallis ante condimentum. Vestibulum vestibulum, urna in hendrerit dictum, dolor velit congue diam, eu rhoncus ex mauris ut sapien. Duis viverra mi sapien. Ut faucibus vehicula lobortis. Nam elementum sed arcu et lacinia. Maecenas nec metus ac nibh auctor bibendum. Vestibulum in sem in leo convallis ullamcorper eu in ligula. Fusce consectetur mauris ac eros euismod consequat. Aenean condimentum sapien et elit varius, non mollis metus laoreet. Morbi sed augue sit amet dolor suscipit vulputate.
      </p>
  </div>
  <div class="boxed">
      <h3><span class="first_letter">I</span>nterests</h3>
      <hr />
      <ul>
          <li>PC Games</li>
          <li>Console Games</li>
          <li>Tabletop Roleplaying</li>
          <li>Board Games</li>
      </ul>
  </div>
  <div class="boxed">
      <h3><span class="first_letter">F</span>avorites</h3>
      <hr />
      <ul>
          <li>PC Games: Overwatch, Civilization, Borderlands, Dishonored, Skyrim</li>
          <li>Console Games: Persona 4, Okami, Rock Band, Valkyria Chronicles, Kingdom Hearts</li>
          <li>Tabletop Roleplaying: Dungeons &amp; Dragon, Mutants &amp; Masterminds, Pathfinder</li>
          <li>Board Games: Settlers of Catan, Sentinels of the Multiverse, Smash Up, Lifeboat, Splendor</li>
      </ul>
  </div>
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
