<?php
if(isset($_POST["update"])){
	include 'artikels.php';
	include 'conn.php';
	$conn = dbConnect();

	//var_dump($_POST);

	$klant = new klant;
	$klant->updateKlant($conn, $_POST['klantnaam'], $_POST['klantEmail'], $_POST['klantAdres'], $_POST['klantPostcode'], $_POST['klantWoonplaats']);
	
	echo '<script>alert("klant is gewijzigd")</script>';
	
	// Toon weer het scherm
	include "klantupdateform.php";
	
	}
?>