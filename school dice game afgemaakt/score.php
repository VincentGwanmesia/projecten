<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>score</title>
	<style>

	body{
    background-image: url('wakken.png');
	}

	h3{
	    color: #000000;
	    font-size: 30px;
	}

	#container{
	    text-align: center;
	    background-color: white;
	    width: 800px;
	    margin: auto;
	    margin-top: 20px;
	    margin-bottom: 34px;
	    padding-top: 20px;
	    padding-bottom: 25px;
	}

	#container table{
	    margin: auto;
	    width: 80%;
	}
	</style>
</head>
<body>
	<div id="container">
        <h3>Dit zijn alle scores van previous games</h3>
<?php
require_once "Connect.php";

$score = $conn->prepare("
                                        SELECT  id,
                                                aantaldobbel,
                                                aantalwakken,
                                                aantalberen,
                                                aantalpenguins
                                        FROM    score
                                    ");
            $score->execute();

                echo "<table border = '1' bordercolor = 'black'>";              
				echo "<tr>";
				echo "<td>Game</td>";
				echo "<td>Gekozen dobbelstenen</td>";
				echo "<td>Gekozen wakken</td>";
				echo "<td>Gekozen ijberen</td>";
				echo "<td>Gekozen penguins</td>";
				echo "</tr>";              

                foreach($score as $score)
                {
				echo "<tr>";
				echo "<td>" . $score["id"] . "</td>";
				echo "<td>" . $score["aantaldobbel"] . "</td>";
				echo "<td>" . $score["aantalwakken"] . "</td>";
				echo "<td>" . $score["aantalberen"] . "</td>";
				echo "<td>" . $score["aantalpenguins"] . "</td>";
				echo "</tr>";
                }
            echo "</table>";
            echo "<a href='control.php'>terug naar het menu</a>";
			
            
/*class Score{
	
 public function getScore(){ 
	 require_once "Connect.php";
	 $conn = dbConnect();
 
 
	 $score = $conn->prepare("select * from score");
	 $score->execute();
	 $lijst = $score->fetchAll();
	 return $lijst;
	}
	
	public function printTable ($lijst){
		require_once "Connect.php";
		echo "<table border = '1' bordercolor = 'pink'>";
		foreach($lijst as $row)		
		{
		echo "<tr>";
		echo "<td>" . $row["id"] . "</td>";
		echo "<td>" . $row["aantaldobbel"] . "</td>";
		echo "<td>" . $row["aantalwakken"] . "</td>";
		echo "<td>" . $row["aantalberen"] . "</td>";
		echo "<td>" . $row["aantalpenguins"] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
	$score->execute();
		
		
	}
 }*/
?>	
	</div>
</body>
</html>