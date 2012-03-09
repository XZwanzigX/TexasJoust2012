<html>
    <head>
        <title>Lysts on the Lake 2012 - Other pages</title>
        <link rel="stylesheet" href="css/structure.css"/>
        <link rel="stylesheet" href="css/textStyles.css"/>
        <link rel="stylesheet" href="css/nav.css"/>
    </head>
    <body class="other-page-body">
        <img src="img/template/blank.png" class="bottom-page">
        <div class="other-page-text">
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
                include '../db/dbConfig.php';
                include '../db/dbConnection.php';
                include '../db/retrieveCompetitors.php';
                ?>
                <td colspan="5">
                    <a href="http://www.aplaisance.com" onmouseover="document.aPlaisance.src='img/template/nav/aPlaisanceGlow.png';" onmouseout="document.aPlaisance.src='img/template/nav/aPlaisance.png'"><img src="img/template/nav/aPlaisance.png" name="aPlaisance" border="0"></a>
                </td></tr>
            </table>
        </div>
    </body>
</html>