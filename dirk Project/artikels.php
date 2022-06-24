<!DOCTYPE html>
<html>
<head>
	<title>Artikels inzien</title>
	<link rel="stylesheet" href="dirk.css" />
</head>

<body>
<?php
	include "select.php";

	$artikel = new Artikel;

	$lijst = $artikel->getArtikel();

	$artikel->printTable($lijst);


	public function updateArtikel($conn, $artOmschrijving){

		$sql = "update artikel 
			set OMSCHRIJVING = '$artOmschrijving' 
			WHERE artOmschrijving = 'artikel'";

		$stmt = $conn->prepare($sql);
		$stmt->execute(); 
		return ($stmt->rowCount() == 1) ? true : false;				
	}

	public function updateKlant($conn, $klantnaam, $klantEmail, $klantAdres, $klantPostcode, $klantWoonplaats){

		$sql = "update klanten 
			set OMSCHRIJVING = '$klantnaam, $klantEmail, $klantAdres, $klantPostcode, $klantWoonplaats' 
			WHERE klantId = '?'";

		$stmt = $conn->prepare($sql);
		$stmt->execute(); 
		return ($stmt->rowCount() == 1) ? true : false;				
	}

	public function updateVerkooporders($conn, $klantId, $artId, $verkOrdDatum, $verkOrdBestAantal, $verkOrdStatus){

		$sql = "update verkooporders 
			set OMSCHRIJVING = '$klantId, $artId, $verkOrdDatum, $verkOrdBestAantal, $verkOrdStatus' 
			WHERE verkOrdId = '?'";

		$stmt = $conn->prepare($sql);
		$stmt->execute(); 
		return ($stmt->rowCount() == 1) ? true : false;				
	}
?>
</body>
</html>