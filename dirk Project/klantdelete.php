<?php 

if(isset($_POST["verwijderen"])){
	include 'klant.php';
	include 'conn.php';
	$conn = dbConnect();

	// Maak een object Acteur
	$klant = new Klant;
	
	// Delete Acteur op basis van NR
	$klant->deleteKlant($conn, $_POST["nr"]);
	echo '<script>alert("Klant verwijderd")</script>';
}
?>
