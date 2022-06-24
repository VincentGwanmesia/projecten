<?php
if(isset($_POST["update"])){
	include 'artikels.php';
	include 'conn.php';
	$conn = dbConnect();

	//var_dump($_POST);

	$artikel = new Artikel;
	$artikel->updateArtikel($conn, $_POST['artOmschrijving']);
	
	echo '<script>alert("Artikel is gewijzigd")</script>';
	
	// Toon weer het scherm
	include "artupdateform.php";
	
	}
?>