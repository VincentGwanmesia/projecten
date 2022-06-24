<!DOCTYPE html>
<html>
<head>
	<title>verkooporders inzien</title>
	<link rel="stylesheet" href="dirk.css" />	
</head>

<body>
<div>
<?php
	include "select.php";

	$verkoopord = new Verkooporder;

	$lijst = $verkoopord->getVerkooporder();

	$verkoopord->printTable($lijst);
?>
</div>
</body>
</html>