<?php 

if(isset($_POST["verwijderen"])){
	include 'klant.php';
	include 'conn.php';
	$conn = dbConnect();

	// Maak een object Acteur
	$leveranciers = new Leveranciers;
	
	// Delete Acteur op basis van NR
	$leveranciers->deleteLeveranciers($conn, $_POST["nr"]);
	echo '<script>alert("leverancier verwijderd")</script>';
}
?>
