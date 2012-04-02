<html>
	<head>
        <link rel="stylesheet" href="css/dropMenu.css"/>
        <link rel="stylesheet" href="css/navOther.css"/>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="stylesheet" href="css/textStyles.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="css/structure.css" type="text/css"/>

        <script src="js/jquery-1.2.6.min.js"></script>
        <script src="js/dropMenu.js"></script>
        <script src="js/goog.js"></script>

        <?php
                include '../db/dbConfig.php';
                include '../db/dbConnection.php';
                include '../db/competitorInfo.php';

//                include '../../db/devConfig.php';
//                include '../../db/devConnection.php';
//                include '../../db/competitorInfo.php';
                $info = getCompetitorInfo();

        ?>
        <title>Lysts on the Lake : Competitor Bio : <?php echo $info['name']; ?></title>
    </head>

	<?php include('template/otherPageBegin.php'); ?>
<?php

                echo "             <div id=\"competitorName\" style=\"width:361px; height:144px; margin:0 auto;\">\n";
                echo "                <img src=\"img/competitors/competitorNames/" . $info['shortName'] . ".png\"/>\n";
                echo "                </div>";
                echo "            <div id=\"bodyText\" class=\"individualCompetitorText\">\n";
                echo "<div id=\"competitorImages\" style=\"margin:0 auto; text-align:center;\">";
				echo "				<table class=\"centerForm\">\n";
				echo "		<tr>\n";
				echo "			<td><img src=\"img/competitors/largeArms/" . $info['shortName'] . ".png\"/></td>\n";
				echo "			<td><img src=\"img/competitors/largePics/" . $info['shortName'] . ".png\"/></td>\n";
				echo "		</tr>\n";
				echo "	</table>\n";
				echo "</div>\n";
              echo "<table class=\"centerForm\">\n";
                $i = 0;
                $events = array();
                if ($info['joust']) { $events[$i] = 'Joust'; ++$i;}
                if ($info['melee']) { $events[$i] = 'Melee aCheval'; ++$i; }
                if ($info['saa']) { $events[$i] = 'Skill at Arms'; ++$i; }

                if($events) {
                    echo "       <tr>\n";
                    echo "           <td class=\"bioHeading\">Competing In:</td>\n";
                    echo "           <td class=\"bioData\">" . implode(', ', $events) . "</td>";
                    echo "       </tr>\n";
                }

                if ($info['height'] != '-') {
				    echo "          <tr>\n";
				    echo "             <td class=\"bioHeading\">Height:</td>\n";
                    echo "             <td class=\"bioData\">" . $info['height'] . "</td>";
                    echo "      </tr>";
                }						  
                
				if ($info['weight'] != '-') {
					echo "          <tr>\n";
			        echo "             <td class=\"bioHeading\">Weight:</td>";
			        echo "             <td class=\"bioData\">" . $info['weight'] . "</td>";
                    echo "      </tr>";
			  }
			  
			  if ($info['hometown'] != '-') {
					echo "          <tr>\n";
			        echo "             <td class=\"bioHeading\">From:</td>";
			        echo "             <td class=\"bioData\">" . $info['hometown'] . "</td>\n";
                    echo "      </tr>";
			  }
			  
			  if ($info['started_jousting'] != '-') {
					echo "          <tr>\n";
			        echo "             <td class=\"bioHeading\">Started Jousting:</td>";
			        echo "             <td class=\"bioData\">" . $info['started_jousting'] . "</td>\n";
                    echo "      </tr>";
			  }

  		      if ($info['motto'] != "-") {
					echo "\t<tr>";
			        echo "\t\t<td class=\"bioHeading\">Motto:</td>\n";
			        echo "\t\t<td class=\"bioData\">" . $info['motto'] . "</td>\n";
				    echo "\t</tr>";
			  }

		     echo "   </table>\n";
			 
			 if ($info['bio'] != "'-'") {
                 echo "           <div id=\"competitorBio\">";
			     echo "<p>" . $info['bio']; "</p></div>\n";
		     }
			echo "				</div>";
?>							
<?php include('template/otherPageEnd.php');?>
</html>
