<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
<meta charset="UTF-8">
  <meta name="author" content="Kornelia Lewalska">
  <title>stemmer registreren</title>
  <link rel="stylesheet" href="stijl.css">   
</head>
<body>
<div id="naam">
<header>
     <div id="main">
         <div class="plekk">    
         <h1><figure>
        <img src="skav.png" height="100" width="150">
        </figure></h1>
          </div>
                <nav>
                  <ul>
                   <li>
                      <a href="Main.php">Hoofdpagina</a>
                    </li>     
                    <li>
                      <a href="RegastratieVerkiesbare.php">Regastratie Verkiesbare</a>                     
                    </li>
                    <li>
                      <a href="RegastratiePartijen.php">Registratie Partijen</a>
                    </li>
                    <li>
                      <a href="registratie.php">Registratie</a>
                    </li>
                  </ul>
                </nav>
        </div>      
</header> 
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => bas
        $conn = mysqli_connect("localhost", "root", "", "stemmen");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 6 values from the form data(input)
        $naam =  $_REQUEST['naam'];
        $geboorteDatum = $_REQUEST['geboorteDatum'];
        $nationaliteit =  $_REQUEST['nationaliteit'];
        $woonplaats = $_REQUEST['woonplaats'];
        $postcode = $_REQUEST['postcode'];
          
        // Performing insert query execution
        // here our table name is KLANTEN
        $sql = "INSERT INTO stemmers  VALUES ('$naam', 
            '$geboorteDatum','$nationaliteit','woonplaats','$postcode')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$naam\n $geboorteDatum\n "
                . "$nationaliteit\n $woonplaats\n $postcode");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
        <footer id="footer">
    <div class="plek">
        <section class="nee">
            <section class="stom">    
           <h3>Voor meer hulp bel naar</h3>
                <p><abbr title="Phone">Telefoonnummer:</abbr>+31 (6) 11476024</p>
                <h3>Of mail ons naar</h3>
              <p>
                <address>
                <strong>Email:</strong><a href="Verkiezingen2022@hotmail.com"> Verkiezingen2022@hotmail.com</a><br />
                <strong>Gmail:</strong><a href="Verkiezingen2022@Gmail.com"> Verkiezingen2022@gmail.com</a><br />
            </address>
            </p>       
             <p>Via email proberen we zo snel mogelijk te reageren.</p>
             <p>We reageren proberen binnen 1-3 werkdagen</p>
            </section>
            <section class="stom">
               <h3>Wij zijn bereikbaar op:</h3>
               <p>donderdag 07:00–19:00</p>
                <p>vrijdag  07:00–19:00</p>
                <p>zaterdag Gesloten</p>
                <p>zondag
                (Pinksteren)
                Gesloten</p>
                <p>maandag
                (Tweede Pinksterdag)
                07:00–19:00
                Openingstijden kunnen afwijken</p>
                <p>dinsdag  07:00–19:00</p>
                <p>woensdag 07:00–19:00 </p>
            </section>
        </section>
    </div>
</footer>
</body>
  
</html>