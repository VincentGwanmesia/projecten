<!DOCTYPE html>
<html lang="nl">
  
<head>
    <title>Klant toevoegen</title>
	<link rel="stylesheet" href="dirk.css" />
</head>
  
<body>
    <center>
        <h1>klant toevoegen</h1>
  
        <form action="insertklant.php" method="post">
              
              
<p>
                <label for="klantid">Klant id:</label>
                <input type="text" name="klantid" id="klantid">
            </p>
  
  
  
              
              
<p>
                <label for="klantNaam">Klant naam:</label>
                <input type="text" name="klantNaam" id="klantNaam">
            </p>
  
  
  
              
              
<p>
                <label for="klantEmail">Email:</label>
                <input type="text" name="klantEmail" id="klantEmail">
            </p>
  
  
              
              
              
<p>
                <label for="klantAdres">Adres:</label>
                <input type="text" name="klantAdres" id="klantAdres">
            </p>
  
  
              
              
              
<p>
                <label for="klantPostcode">Postcode:</label>
                <input type="text" name="klantPostcode" id="klantPostcode">
            </p>

  <p>
                <label for="klantWoonplaats">Woonplaats:</label>
                <input type="text" name="klantWoonplaats" id="klantWoonplaats">
            </p>
  
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>