<?php 

if(isset($_POST["verwijderen"])){
	include 'klant.php';
	include 'conn.php';
	$conn = dbConnect();

	// Maak een object Acteur
	$artikel = new Artikel;
	
	// Delete Acteur op basis van NR
	$artikel->deleteArtikel($conn, $_POST["nr"]);
	echo '<script>alert("artikel verwijderd")</script>';
}
?>
