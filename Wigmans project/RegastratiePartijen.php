<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
<meta charset="UTF-8">
  <meta name="author" content="Vincent Gwanmesia">
  <title> Regastratie partijen </title>
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
        <h1>Partijen toevoegen</h1>
  
        <form action="insertPartijen.php" method="post">
              
              
	<p>
        <label for="PartijeNaam">Partij naam:</label>
            <input type="text" name="PartijeNaam" id="PartijeNaam">
    </p>             
	<p>
        <label for="Leden">Aantal leden:</label>
            <input type="text" name="Leden" id="leden">
    </p>             
	<p>
        <label for="JaarOpgericht">Welk jaar is het opgericht:</label>
			<input type="date" name="JaarOpgericht" id="JaarOpgericht">
    </p>                                       
	<p>
        <label for="StaatVoor">Waar staat het voor:</label>
            <input type="text" name="StaatVoor" id="StaatVoor">
    </p>                                    
	<p>
       <label for="RechtsLinks">Is het een rechtse partij of in linkse partij:</label>
            <select id="RechtsLinks" type="select" name="RechtsLinks" id="RechtsLinks">
                <option value="Rechts?">Rechts</option>
                <option value="Links">Links</option>
            </select>
    </p>              
            <input type="submit" value="Submit">
        </form>
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
               <p>donderdag	07:00–19:00</p>
				<p>vrijdag	07:00–19:00</p>
				<p>zaterdag	Gesloten</p>
				<p>zondag
				(Pinksteren)
				Gesloten</p>
				<p>maandag
				(Tweede Pinksterdag)
				07:00–19:00
				Openingstijden kunnen afwijken</p>
				<p>dinsdag	07:00–19:00</p>
				<p>woensdag	07:00–19:00 </p>
            </section>
        </section>
    </div>
</footer>
</body>
</html>