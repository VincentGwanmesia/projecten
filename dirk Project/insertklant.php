<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
	<link rel="stylesheet" href="dirk.css" />	
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => dirk
        $conn = mysqli_connect("localhost", "root", "", "dirk");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 6 values from the form data(input)
        $klantid =  $_REQUEST['klantid'];
        $klantNaam = $_REQUEST['klantNaam'];
        $klantEmail =  $_REQUEST['klantEmail'];
        $klantAdres = $_REQUEST['klantAdres'];
        $klantPostcode = $_REQUEST['klantPostcode'];
        $klantWoonplaats = $_REQUEST['klantWoonplaats'];
          
        // Performing insert query execution
        // here our table name is KLANTEN
        $sql = "INSERT INTO KLANTEN  VALUES ('$klantid', 
            '$klantNaam','$klantEmail','klantAdres','$klantPostcode','$klantWoonplaats')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$klantid\n $klantNaam\n "
                . "$klantEmail\n $klantAdres\n $klantPostcode\n $klantWoonplaats");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>