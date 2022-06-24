<?php
if(isset($_POST["update"])){
	include 'artikels.php';
	include 'conn.php';
	$conn = dbConnect();

	//var_dump($_POST);

	$verkooporders = new Verkooporders;
	$verkooporders->updateVerkooporders($conn, $_POST['$klantId, $artId, $verkOrdDatum, $verkOrdBestAantal, $verkOrdStatus']);
	
	echo '<script>alert("verkooporder is gewijzigd")</script>';
	
	// Toon weer het scherm
	include "verokrdupdateform.php";
	
	}
?>