<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'GameNeighbor - Welcome!')
    </title>

    <meta charset="utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/p4/public/css/gn_main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>

    <link rel="stylesheet" href="/p4/public/css/jquery.fancybox.min.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/p4/public/js/jquery.fancybox.min.js"></script>

    <script>
        $(document).ready(function(){
            var mybodyid = $('body').attr('id');
            var mysidenavid = '#s-iam' + mybodyid;
            var myheadnavid = '#h-iam' + mybodyid;
            if ($(mysidenavid).attr('class') == 'top') {
                $(mysidenavid).attr('class','iamhere-top');
            }
            else if ($(mysidenavid).attr('class') == 'bottom') {
                $(mysidenavid).attr('class','iamhere-bottom');
            }
            else {
                $(mysidenavid).attr('class','iamhere');
            }
            $(myheadnavid).attr('class','iamhere');

            $('.slideshow').cycle({
                fx: 'fade'
            });

            $(".fancybox").fancybox({
                openEffect	: 'none',
                closeEffect	: 'none'
            });
        });
    </script>

    @stack('head')

</head>
<body>

    <header id="header">
        <a href="index.php"><h1 id="page_title"><span class="first_letter">G</span>ame<span class="first_letter">N</span>eighbor</h1></a>
        <img src="images/controller.png" alt="Controller" />
        <img src="images/d20.png" alt="d20"/>
        <img src="images/mouse.png" alt="Mouse"/>
        <img src="images/board_piece.png" alt="Board Game Piece"/>
    </header>
    <div id="header_nav">
                <ul>
                    <li id="h-iamhome"><a href="index.php">Home</a></li>
                    <li id="h-iamprofile"><a href="profile.php">Profile</a></li>
                    <li id="h-iamfriends"><a href="friends.php">Friends</a></li>
                    <li id="h-iamlocations"><a href="locations.php">Locations</a></li>
                    <li id="h-iamnews"><a href="news.php">News</a></li>
                    <li id="h-iamevents"><a href="events.php">Events</a></li>
                </ul>
                <br/>
    </div>
    <div id="side_nav">
      <nav>
        <ul>
            <li id="s-iamhome" class="top"><a href="index.php">Home</a></li>
            <li id="s-iamprofile"><a href="profile.php">Profile</a></li>
            <li id="s-iamfriends"><a href="friends.php">Friends</a></li>
            <li id="s-iamlocations"><a href="locations.php">Locations</a></li>
            <li id="s-iamnews"><a href="news.php">News</a></li>
            <li id="s-iamevents" class="bottom"><a href="events.php">Events</a></li>
        </ul>
      </nav>
    </div>

    <section id='main'>
        @yield('content')
    </section>

    <footer>
      <p>This is the placeholder footer for the GameNeighbor page. The live version of this would have copyright info and links for <a href="support.php">Support</a> and <a href="contactus.php">Contact Us</a> pages </p>
      <p>GameNeighbor &copy; 2017</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    @stack('body')

</body>
</html>
