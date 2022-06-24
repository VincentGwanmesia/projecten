<?php
//function dbConnect(){
    $servername="localhost";
    $dbname="dice_game";
    $username="root";
    $password="";


    try
    {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connectie gelukt <br>";
    }
    catch(PDOException $e)
    {
        echo "Connectie mislukt: " . $e->getMessage();
    }
/*try {
  $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully </br>";

  // sql to create table
  $sql = "CREATE TABLE IF NOT EXISTS Score (
											id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
											aantaldobbel INT(8),
											aantalwakken VARCHAR(50),
											aantalberen VARCHAR(50),
											aantalpenguins VARCHAR(50)
		)";

  //use exec() because no results are returned
  $conn->exec($sql);
  //echo "Table created successfully </br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
  //return $conn;
//}

//$conn = null;
*/



?>