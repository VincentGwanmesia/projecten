<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="dirk.css" />
</head>
<body>
<h1>CRUD BAS</h1>
<h2>Wijzigen</h2>

<div>
<form method="post" action="ordstatupdate.php">
<input type='hidden' name='nr' value='<?php echo $_POST["nr"];?>'>
<input type='text' name='inkOrdStatus' required value="<?php echo $_POST["inkOrdStaus"];?>"> *</br>
<input type='submit' name='update' value='Wijzigen'>
</form></br>

<a href='ordstatselect.php'>Terug</a>
</div>
</body>
</html>