<html>
    <head>
        <title>Lysts on the Lake 2012 - Other pages</title>
        <link rel="stylesheet" href="css/structure.css"/>
        <link rel="stylesheet" href="css/textStyles.css"/>
        <link rel="stylesheet" href="css/nav.css"/>
    </head>
    <body class="other-page-body">
        <div class="other-page-text">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td class="competitorName"><img src="img/competitors/thumbnails/DawnHemphill.png" class="competitorThumbnail"/><br>Dawn Hemphill</td>
                    <td class="competitorName">
                        <img src="img/competitors/thumbnails/MichaelCarroll.png" class="competitorThumbnail"/><br>Michael Carroll
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <?php
                include '../db/dbConfig.php';
                include '../db/dbConnection.php';
                include '../db/retrieveCompetitors.php';
                ?>
            </table>
        </div>
    </body>
</html>