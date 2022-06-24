<!DOCTYPE html>
<html>
<head>
	<title>inkooporders</title>
	<link rel="stylesheet" href="dirk.css" />
</head>

<body>
<?php
	include "conn.php";
	include "inkooporder.php";

	$inkooporders = new Inkooporders;
	$lijst = $inkooporders->getInkooporders($conn);
	$inkooporders->printTable($lijst);

?>
</body>
</html>