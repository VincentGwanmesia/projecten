
        <!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
<meta charset="UTF-8">
  <meta name="author" content="Vincent Gwanmesia">
  <title> Regastratie verkiesbare </title>
  <link rel="stylesheet" href="stijl.css">   
</head><body>
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
                      <a href="RegastratieVerkiesbare.php">Registratie Verkiesbare</a>                     
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

<main>
    <div id= "container">
        <div class="item">
            <article>
        <h1>Verkiesbare toegevoegd</h1>
  <?php

                $id                 = NULL;
                $Naam               = $_REQUEST['Naam'];
                $Geboorte_datum     = $_REQUEST['Geboorte_datum'];
                $Nationaliteit      = $_REQUEST['Nationaliteit'];
                $Woonplaats         = $_REQUEST['Woonplaats'];
                $Postcode           = $_REQUEST['Postcode'];

                require_once "conn.php";

                $sql = $conn->prepare("
                                        INSERT INTO verkiesbare VALUES
                                        (
                                          :Id, :Naam, :Geboorte_datum, :Nationaliteit, :Woonplaats, :Postcode                                
                                        )
                                    ");

                $sql-> execute([
                        "Id"                => $id,
                        "Naam"              => $Naam,
                        "Geboorte_datum"    => $Geboorte_datum,
                        "Nationaliteit"     => $Nationaliteit,
                        "Woonplaats"        => $Woonplaats,
                        "Postcode"          => $Postcode,
                        ]);

                echo "U bent toegevoegd <br>";
                echo "<a href='Main.php'> terug naar het menu </a>";
        ?>
    </article>
        </div>
    </div>
</main> 
</div>
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