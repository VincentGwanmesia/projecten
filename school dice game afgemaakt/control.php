<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dice Game</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container" >

	<form action="control.php" method="POST">
		        <label>Aantal Dobbelstenen:</label>
					<select name="aantaldobbel" >
						<option value="0">0</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
					</select>
			</br>
			
	           <label>Aantal wakken:</label>
			   </br><input type="text" name="aantalwakken" ><br />
		       <label>Aantal ijsberen:</label>
			   </br> <input type="text" name="aantalberen" ><br />
		       <label>Aantal penguins:<label>
			   </br> <input type="text" name="aantalpenguins" ><br />	
			   <input type="submit" name="throw" value="Roll"></br>
	</form>
	<?php



		include('dice.php');
		include ('game.php');
		include "Connect.php";
		//require_once ('');

		

		if (isset($_POST['throw']))
		{
			if(empty($_POST['aantaldobbel'])){
				echo "<script type='text/javascript'>alert('Kies een aantal dobbelstenen om te spelen!');</script>";
                echo "<div class=\"w\">Foutmelding: Kies een aantal dobbelstenen om te spelen!</div>";
			}else{


				echo("Aantal dobbelstenen: " . $_POST['aantaldobbel']);
			    echo("<h3>Laten we kijken naar de wat u heeft gegooid;)<br/></h3>");
			    $myGame = new Game();
			    $myGame->play($_POST['aantaldobbel']);
				$myGame->getAantalWakken();
				$myGame->getAantalBeren();
				$myGame->getAantalPenguins();

	
			  $ingetypteAantalWakken = $_POST['aantalwakken'];
			  $ingetypteAantalBeren = $_POST['aantalberen'];
			  $ingetypteaantalPenguins = $_POST['aantalpenguins'];
			
			  $gegooideAantalWakken = $myGame->getAantalWakken();
			  $gegooideAantalBeren = $myGame->getAantalBeren();
			  $gegooideAantalPenguins = $myGame->getAantalPenguins();
			  echo ("Aantal wakken ingetypt: " .$_POST['aantalwakken']);
			  echo ("</br>");
			  echo ("Aantal wakken gegooid: " . $gegooideAantalWakken);
			  echo ("</br>");
			  echo ("Aantal ijsberen ingetypt: " .$_POST['aantalberen']);
			  echo ("</br>");
			  echo ("Aantal ijsberen gegooid: " . $gegooideAantalBeren);
			  echo ("</br>");
			  echo ("Aantal penguins ingetypt: " .$_POST['aantalpenguins']);
			  echo ("</br>");
			  echo ("Aantal penguins gegooid: " . $gegooideAantalPenguins);
			  echo ("</br>");

			  /*$sql = $conn->prepare("
					INSERT INTO score VALUES
							(
							:aantaldobbel, :aantalwakken, :aantalberen, :aantalpenguins							  
							)
						");

				$sql-> execute([
						"aantaldobbel"      => $aantaldobbel
						]);*/

			  if ($ingetypteAantalWakken == $gegooideAantalWakken) {
				  echo ("Aantal wakken klopt.  ");
				 /* $sql = $conn->prepare("
										INSERT INTO score VALUES
										(
										  :aantalwakken								  
										)
									");*/
				 /* $sql-> execute([						
						"aantalwakken"      => $aantalwakken
						]);
					//echo ("</br>");*/
			  } else {
				  echo ("Aantal wakken klopt niet! ");
			  }
				echo ("</br>");
			  if ($ingetypteAantalBeren ==$gegooideAantalBeren) {
				  echo ("Aantal ijsberen klopt.  ");
				  				  /*$sql = $conn->prepare("
										INSERT INTO score VALUES
										(
										  :aantalberen								  
										)
									");*/
				 /* $sql-> execute([						
						"aantalberen"      => $aantalberen
						]);
				  echo ("</br>");*/
			  } else {
				  echo ("Aantal ijsberen klopt niet!  ");
				  echo ("</br>");
			  }
			  if ($ingetypteaantalPenguins == $gegooideAantalPenguins) {
				  echo ("Aantal penguins klopt.  ");
				  				  /*$sql = $conn->prepare("
										INSERT INTO score VALUES
										(
										  :aantalpenguins								  
										)
									");*/
				  /*$sql-> execute([						
						"aantalpenguins"      => $aantalpenguins
						]);*/
			  } else {
				  echo ("Aantal penguins klopt niet!  ");
				  echo ("</br>");
			  }
			
			}
		}
		echo "<a href='score.php'>scoreboard</a>";

		/*$id          	  = NULL;
		$aantaldobbel  	  = $_POST["aantaldobbel"];
		$aantalwakken  	  = $_POST["aantalwakken"];
		$aantalberen  	  = $_POST["aantalberen"];
		$aantalpenguins   = $_POST["aantalpenguins"];
		
		require_once ('Connect.php');
		
		$sql = $conn->prepare("
										INSERT INTO score VALUES
										(
										  :aantaldobbel, :aantalwakken, :aantalberen, :aantalpenguins						  
										)
									");

				$sql-> execute([
						//"id"                => $id,
						"aantaldobbel"		=> $aantaldobbel,
						"aantalwakken"      => $aantalwakken,
						"aantalberen"       => $aantalberen,
						"aantalpenguins"    => $aantalpenguins
						]);	*/

    // INSERT query maken en uitvoeren.
    $stmt = $conn->prepare("INSERT INTO score (id, aantaldobbel, aantalwakken,aantalberen, aantalpenguins) 
    VALUES (:id,:aantaldobbel, :aantalwakken, :aantalberen, :aantalpenguins)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':aantaldobbel', $aantaldobbel);
    $stmt->bindParam(':aantalwakken', $aantalwakken);
    $stmt->bindParam(':aantalberen', $aantalberen);
    $stmt->bindParam(':aantalpenguins', $aantalpenguins);


    // Als er een waarde is INSERT rij
    if (isset($_REQUEST['aantaldobbel']))
 {
    $aantaldobbel   = $_POST['aantaldobbel'];
    $aantalwakken   = $_POST['aantalwakken'];
    $aantalberen    = $_POST['aantalberen'];
    $aantalpenguins = $_POST['aantalpenguins'];
    $stmt->execute();
}

$conn = null;

		


	?>
	</div>
</body>
</html>