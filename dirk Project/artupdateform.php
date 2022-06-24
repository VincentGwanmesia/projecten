<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="dirk.css" />
</head>
<body>
<h1>CRUD BAS</h1>
<h2>Wijzigen</h2>

	
<form method="post" action="artupdate.php">
<input type='hidden' name='nr' value='<?php echo $_POST["artOmschrijving"];?>'>
<input type='submit' name='update' value='Wijzigen'>
</form></br>

<a href='index.php'>Terug</a>

</body>
</html>