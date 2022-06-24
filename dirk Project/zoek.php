<?php
include "conn.php";

//-- $HTTP_POST_VARS[zoekterm] is de naam van het zoekveld in het formulier wat we
//-- hebben gemaakt in het vorige 'hoofdstuk'. Dit is dus de SQL code:
$sql = "SELECT * from klanten WHERE klantId LIKE '%$HTTP_POST_VARS[zoekterm]%'";

//-- voer de SQL code uit en zet dit in een variabele zodat we zometeen kunnen
//-- kijken of er een resultaat is
$res = mysql_query($sql);

//-- bekijk nu of er een resultaat is, of het zoekwoord dus gevonden is of niet
if (mysql_num_rows($res) >= 1)
{
//-- er is een resultaat gevonden, toon de resultaten via een while () loop
while ($row = mysql_fetch_array($res))
{
echo " <br /><br />klantId&nbsp&nbsp<strong>" . $row["klantId"] " \n";


}

}
//-- als er geen resultaat is gevonden, dus als het zoekwoord niet gevonden is:
else
{
echo "<p>Er is niets gevonden op u zoekterm:<b> $HTTP_POST_VARS[zoekterm]</b></p>";



}
?>