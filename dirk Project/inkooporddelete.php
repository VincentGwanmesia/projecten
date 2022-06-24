<?php 

if(isset($_POST["verwijderen"])){
	include 'klant.php';
	include 'conn.php';
	$conn = dbConnect();

	// Maak een object Acteur
	$inkooporders = new Inkooporders;
	
	// Delete Acteur op basis van NR
	$inkooporders->deleteInkooporders($conn, $_POST["nr"]);
	echo '<script>alert("inkooporder verwijderd")</script>';
}
?>
