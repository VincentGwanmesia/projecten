<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
<meta charset="UTF-8">
  <meta name="description" content="Dit is royalty. Wij vlechten je haar en verkopen ook haarspullen."> 
  <meta name="keywords"  content="vlechten, haarproducten, afro haar, nephaar, betaalbaar"> 
  <meta name="author" content="Vincent Gwanmesia">
  <title> Reserveren </title>
  <link rel="stylesheet" href="stijlen.css">
 <style>
 
  .plek {
    width: 700px;
    height: 100px;
    margin: 1px auto;
    position: relative;
}
 
 nav{
    background-color: #008080;
    border: 3px solid gray;
}

nav:after{
    content: '';
    clear: both;
    display: table;
}

nav ul{
    text-align: center;
    list-style: none;
}

nav ul li{
    display: inline-block;
    margin: 0 5px;
}

nav ul li a:hover{
    color: white;
    border-radius: 8px;
    box-shadow: 0 0 5px white,
    0 0 10px white;
}

nav ul ul li a{
    line-height: 50px;
}

nav ul ul{
    position: absolute;
    top: 90px;
    opacity: 0;
    visibility: hidden;
}

nav ul li a{
    color: black;
    text-decoration: none;
    line-height: 70px;
    font-size: 18px;
    padding: 12px 18px;
}

nav ul li:hover > ul{
    top: 90px;
    opacity: 1;
    visibility: visible;
}

nav ul ul li{
    position: relative;
    margin: 0px;
    width: 150px;
    float: none;
    display: list-item;
    background-color: #008080;
    border: 3px solid gray;
}

nav ul ul ul li{
    position: relative;
    top: -70px;
    left: 150px;
}
*{
    margin: 0;
    padding: 0;
}

html, body{
 height: 100%;
 }
 
 
       #naam{
         min-height: 91%;    
     }
     
      #main{ 
     overflow: auto;
     padding-bottom:100px;
     width: 710px;
     margin: 1px auto;
     position: relative; 
     }
     
         #footer {
    text-align: center;
    background-color: #008080;
    color: #000000;
    position: absolute;
    padding: 10px;
    width: 99%;
    bottom: 0 px;
}
     
      .plekk{
         width: 500px;
        margin: 1px auto;
        position: relative;
     }
     .plekk h1{
         margin: 0;
         padding: 0;
         font-family: 'arial'
         front-size: 3em;
         text-transform: uppercase; 
         text-align: center;
         color: #008080;         
         }  
         
         
		 
</style>
	 
</head>
<body>
<div id="naam">
 <div id="main">
 <div class="plekk">
  <h1>Royalty</h1>
  </div>
                <nav>
                  <ul>
                   <li>
                      <a href="index.php">Hoofdpagina</a>
                    </li>     
                    <li>
                      <a href="ons.php">Wie zijn wij</a>
                       
                    </li>
                    <li>
                      <a href="artikelen.php">Onze artikelen</a>
                    </li>
                    <li>
                      <a href="agenda.php">Agenda</a>
                    </li>
                    <li>
                      <a href="reserveering.php">Reservering</a>
                    </li>
                  </ul>
                </nav>
 </div>
	<form action="reserveering.php" method="post">
		<div class="container">
			<div class="item">
			  
			  <h3>Reservering maken</h3>
			  
			   <label>Naam en achternaam</label>
			   
				  <input type="text" name="naam">
				  
				  <input type="text" name="achternaam">		  
				  <br/>	
				  <br/>
				  <label>Leeftijd</label>		  
				  <input type="text" name="leeftijd">
				  <br/>
				  <br/>
				  <label>Haartype</label>		  
				  <input type="text" name="haartype">
				  <br/>
				  <br/>
				  <label>Datum</label>		  
				  <input type="text" name="datum">
				  <br/>
				  <br/>
				  <label>Wilt u thuis afspraak of in de winkel {thuis is ...$ meer}</label>	
				  </br>		  
				  <input type="text" name="TW">
				  <br/>
				  <br/>	  
				  <div>
				  <h4>Als u nog een toevoeging heeft kan u die hier intoetsen</h4>
				  <textarea rows="4" cols="30" name="opmerking"></textarea>
				  </div>
				  <br/>
				  <input type="submit" value="reserveren"> 
				 
			</div>
		</div>
	</form>
</div>	
<footer id="footer">
    <div class="plek">
        <section class="nee">
            <section class="stom">
                <h3>Bereikbaar op</h3>
                <p><abbr title="Phone">Telefoonnummer owner 1:</abbr>+31 (6) 11476024</p>
                <p><abbr title="Phone">Telefoonnummer owner 2:</abbr>+31 (6) 55016863</p>
            </section>
            <section class="stom">
                <p>
                    <address>
                        <strong>Email:</strong><a href="RoyaltyHairstyle@hotmail.com"> RoyaltyHairstyle@hotmail.com</a><br />
                        <strong>Gmail:</strong><a href="RoyaltyHairstyle@Gmail.com"> RoyaltyHairstyle@gmail.com</a><br />
                    </address>
                </p>
                <p>Via email proberen we zo snel mogelijk te reageren.</p>
                <p>We reageren meestal binnen 1-3 werkdagen</p>
            </section>
        </section>
    </div>
</footer>
</body>
</html>
