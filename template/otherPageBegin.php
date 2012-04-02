	<body class="other-page-body">
        <img src="img/template/blank.png" class="bottom-page"/>
		<div id="content" class="other-page-text">
            <?php
                require_once('phpIncludes/Browser.php');
                $browser = new Browser();
                if ($browser->isMobile()) {
                    include('mobileNav.php');
                } else {
                    include('ddNav.php');
                }
            ?>

            <div class="text-container">
