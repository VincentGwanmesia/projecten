<?php 

if(isset($_POST["verwijderen"])){
	include 'klant.php';
	include 'conn.php';
	$conn = dbConnect();

	// Maak een object Acteur
	$verkooporders = new Verkooporders;
	
	// Delete Acteur op basis van NR
	$verkooporders->deleteVerkooporders($conn, $_POST["nr"]);
	echo '<script>alert("verkooporder verwijderd")</script>';
}
?>
