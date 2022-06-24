<!DOCTYPE html>
<html>
<head>
	<title>inkooporders</title>
	<link rel="stylesheet" href="dirk.css" />	
</head>

<body>
<div>
<?php
	include "conn.php";
	include "inkooporders.php";

	$inkooporders = new Inkooporders;
	$inkooporders->updateInkooporders2($conn, $_POST['ordIdStatus']);
	
	echo '<script>alert("Order status is gewijzigd")</script>';
	
	// Toon weer het scherm
	include "orderstatupdateform.php";
	
	}
?>
</div>
</body>
</html>