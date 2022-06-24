<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="dirk.css" />
</head>
<body>
<div>
<h1>CRUD BAS</h1>
<h2>Wijzigen</h2>

	
<form method="post" action="klantupdate.php">
<input type='hidden' name='nr' value='<?php echo $_POST["klantnaam"];?>'>
<input type='hidden' name='nr' value='<?php echo $_POST["klantEmail"];?>'>
<input type='hidden' name='nr' value='<?php echo $_POST["klantAdres"];?>'>
<input type='hidden' name='nr' value='<?php echo $_POST["klantPostcode"];?>'>
<input type='hidden' name='nr' value='<?php echo $_POST["KlantWoonplaats"];?>'>
<input type='submit' name='update' value='Wijzigen'>
</form></br>

<a href='index_klant.php'>Terug</a>
</div>
</body>
</html>