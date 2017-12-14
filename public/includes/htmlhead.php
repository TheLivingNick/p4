    <meta charset="utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/gn_main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>

    <link rel="stylesheet" href="/css/jquery.fancybox.min.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/js/jquery.fancybox.min.js"></script>

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
