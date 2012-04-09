<html>
    <head>
        <title>Lysts on the Lake 2012</title>
        <link rel="stylesheet" href="css/structure.css"/>
        <link rel="stylesheet" href="css/textStyles.css"/>
        <link rel="stylesheet" href="css/nav.css"/>
        <link rel="stylesheet" href="css/dropMenu.css"/>

        <script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
        <script type="text/javascript" src="js/fadeslideshow.js"></script>
        <script type="text/javascript" src="js/slideshow.js"></script>
        <script type="text/javascript" src="js/likeScript.js"></script>
        <script src="js/goog.js"></script>
        <script type="text/javascript" src="js/plusOne.js"></script>
    </head>

    <body class="home-body">
        <img src="img/template/blank.png" class="bottom-page">
            <div class="home-content-pane">
                <?php
                    require_once('phpIncludes/Browser.php');
                    $browser = new Browser();
                    if ($browser->isMobile()) {
                        include('template/mobileNav.php');
                    } else {
                        include('template/ddNav.php');
                    }
                ?>
                <div class="text-container">
                    <div class="home-ticket-button">
                        <a href="https://tix.extremetix.com/Online/?siteID=3045" target="_new"><img src="img/ticket/redTicket.gif"></a>
                    </div>
                    <p style="text-align: center;"><span class="home-heading">COMPETITIVE JOUSTING</span><br>

                        You have seen it on National Geographic.  You have seen it on the History Channel.<br>
                        <span class="home-em">Now see it Live and in Person!</span>

                    <p>For three days only, May 11, 12 and 13, 2012, the top jousters from around the world will be in Taylor, Texas to compete in the <em>Lysts on the Lake</em>, the world's largest competitive jousting tournament.

                    <p><em>Lysts on the Lake</em> is the largest competitive jousting tournament in the world today where the top ranked men and women jousters come to test their skills against their peers in the hardest hitting sport in the world!  Only the finest equestrians, trained in the medieval martial arts of jousting, melee and skill-at-arms are part of this prestigious event.

                    <p> <span style="position: relative; left:40px; font-size:14pt;">The armour is real!</span>         <span style="position: relative; left:200px; font-size:14pt;">The lances are real!</span>         <span style="position: relative; left: 320px; font-size:14pt;">The competition is real!</span>

                    <div style="text-align: center;">
                        <iframe width="640" height="360" src="http://www.youtube.com/embed/UYhdz1bPTAE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="slideshow-container">
                        <div class="floating-slideshow" id="homeSlideshow">
                        </div>
                    </div>
                    <p>You will not have a more exciting, intense sporting experience anywhere else this year!

                    <p>Join us on Friday, May 11, Saturday, May 12 and Sunday, May 13 to experience the thrill of competitive jousting...the original extreme sport!

                    <p><em>Lysts on the Lake</em> will provide you with a unique, up-close-and-personal, equestrian experience that you will never forget.

                    <p><em>Lysts on the Lake</em> is a great family activity as well!  Jousting was the sport of knights where chivalry and honour were of primary importance.  Your children will love meeting the horses and jousters in a completely family-friendly environment.

                    <p>Mark your calendars now and save the weekend of May 11th for the <em>Lysts on the Lake</em>!  You will be glad you did!

                        <?php include('template/foot.php'); ?>
                </div>
            </div>
        <?php include('template/socialNet.php');?>


    </body>
</html>