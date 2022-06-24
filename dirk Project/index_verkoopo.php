<!DOCTYPE html>
<html lang="nl">
  
<head>
    <title>verkooporder toevoegen</title>
	<link rel="stylesheet" href="dirk.css" />
</head>
  
<body>
    <center>
        <h1>verkooporder toevoegen</h1>
  
        <form action="verkoop.php" method="post">
              
              
<p>
                <label for="verkOrdId">verkooporder id:</label>
                <input type="text" name="verkOrdId" id="verkOrdId">
            </p>
  
  
  
              
              
<p>
                <label for="klantId">Klant id:</label>
                <input type="text" name="klantId" id="klantId">
            </p>
  
  
  
              
              
<p>
                <label for="artId">artikel id:</label>
                <input type="text" name="artId" id="artId">
            </p>
  
  
              
              
              
<p>
                <label for="verkOrdDatum">verkooporder datum:</label>
                <input type="text" name="verkOrdDatum" id="verkOrdDatum">
            </p>
  
  
              
              
              
<p>
                <label for="verkOrdBestAanta">verkooporder best aantal:</label>
                <input type="text" name="verkOrdBestAanta" id="verkOrdBestAanta">
            </p>

  <p>
                <label for="verkOrdStatus">verkooporder status:</label>
                <input type="text" name="verkOrdStatus" id="verkOrdStatus">
            </p>
  
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>