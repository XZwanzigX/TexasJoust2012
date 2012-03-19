<html>
	<head>
		<title>Lysts on the Lake : Competitors</title>
        <link rel="stylesheet" href="css/structure.css"/>
        <link rel="stylesheet" href="css/textStyles.css"/>
        <link rel="stylesheet" href="css/navOther.css"/>
        <link rel="stylesheet" href="css/dropMenu.css"/>

        <script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
        <script type="text/javascript" src="js/dropMenu.js"></script>
    </head>
    <body class="other-page-body">
    <img src="img/template/blank.png" class="bottom-page">
    <div class="other-page-text">
        <?php include('template/ddNav.php');?>
        <div class="text-container">
            <table style="position: relative; margin: 0 auto;">
                <tr>
                    <td class="competitorName"><img src="img/competitors/thumbnails/DawnHemphill.png" class="competitorThumbnail"/><br>Dawn Hemphill<br>Lady of Honour</td>
                    <td class="competitorName">
                        <img src="img/competitors/thumbnails/MichaelCarroll.png" class="competitorThumbnail"/><br>Michael Carroll<br>King of Arms
                    </td>
                </tr>
            </table>
            <img src="img/headings/competitors.png" style="position: relative; margin: 0 auto;"/>
            <table>
                <?php
                include '../../db/devConfig.php';
                include '../../db/devConnection.php';
                include '../../db/retrieveCompetitors.php';
                ?>
                </tr>
            </table>
            <!-- <a href="http://www.aplaisance.com" onmouseover="document.aPlaisance.src='img/template/nav/aPlaisanceGlow.png';" onmouseout="document.aPlaisance.src='img/template/nav/aPlaisance.png'">
                <img src="img/template/nav/aPlaisance.png" name="aPlaisance" border="0" style="position: relative; margin:0 auto; top: -57px;">
            </a>-->
        </div>
    </div>
    </body>
</html>
