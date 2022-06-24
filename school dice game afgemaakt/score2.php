<?php
include "score.php"; 

$score = new score;

$lijst = $score->getscore();

//var_dump($lijst);
$score->printTable($lijst);

/*echo "<table>";
		foreach($lijst as $row)
		{
		echo "<tr>";
		echo "<td>" . $row["NR"] . "</td>";
		echo "<td>" . $row["VOORNAAM"] . "</td>";
		echo "<td>" . $row["ACHTERNAAM"] . "</td>";
		echo "</tr>";
		}
      echo "</table>";*/
	  

?>