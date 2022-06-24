<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="dirk.css" />
</head>
<body>
<h1>inkooporders toevoegen</h1>

<?php
include "inkooporder_lijst.php";
include "orders.php";
include 'conn.php';
$conn = dbConnect();


<form action="insertinkooporder.php" method="post">
              
              
<form action="insertklant.php" method="post">
              
              
<p>
                <label for="inkOrdId">inkooporder id:</label>
                <input type="text" name="inkOrdId" id="inkOrdId">
            </p>

	<?php
		isset($_POST['kies-btn']) ? $nr=$_POST['levId'] : $nr=-1;
		$levnaam->dropDownLeveranciers($lijst, $levid);
	?>
	<br>
	<input type='submit' name='kies-btn' value='Kies'></input>
</form>	

<?php

if (isset($_POST['kies-btn'])){
	$levnaam->nr = $_POST['levId'];
	$row = $levid->getLeveranciers($conn);
	
	echo "Gekozen waarde: leverancier: $_POST[levid]"; 
}
?>
<form method='post'>
	<?php
		isset($_POST['kies-btn']) ? $nr=$_POST['artId'] : $nr=-1;
		$levnaam->dropDownLeveranciers($lijst, $artid);
	?>
	<br>
	<input type='submit' name='kies-btn' value='Kies'></input>
</form>	

<?php

if (isset($_POST['kies-btn'])){
	$artnaam->nr = $_POST['artnaam'];
	$row = $artnaam->getArtikels($conn);
	
	echo "Gekozen waarde: artikel: $_POST[artnaam]"; 
}
?>
			<p>
                <label for="inkOrdDatum">inkooporder datum:</label>
                <input type="text" name="inkOrdDatum" id="inkOrdDatum">
            </p>

            <p>

                <label for="inkOrdBestAantal">inkooporder beste aantal:</label>
                <input type="text" name="inkOrdBestAantal" id="inkOrdBestAantal">
            </p>

            <p>
                <label for="inkOrdStatus">inkooporder status:</label>
                <input type="text" name="inkOrdStatus" id="inkOrdStatus">
            </p>

</body>
</html>