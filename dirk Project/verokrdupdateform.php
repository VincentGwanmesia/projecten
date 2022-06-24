<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="dirk.css" />
</head>
<body>
<div>
<h1>CRUD BAS</h1>
<h2>Wijzigen</h2>

	
<form method="post" action="verkordupdate.php">
<input type='hidden' name='nr' value='<?php echo $_POST["klantId"];?>'>
<input type='hidden' name='nr' value='<?php echo $_POST["artId"];?>'>
<input type='hidden' name='nr' value='<?php echo $_POST["verkOrdDatum"];?>'>
<input type='hidden' name='nr' value='<?php echo $_POST["verkOrdBestAantal"];?>'>
<input type='hidden' name='nr' value='<?php echo $_POST["verkOrdStatus"];?>'>
<input type='submit' name='update' value='Wijzigen'>
</form></br>

<a href='index.php'>Terug</a>
</div>
</body>
</html>