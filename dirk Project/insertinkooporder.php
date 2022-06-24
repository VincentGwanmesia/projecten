<!DOCTYPE html>
<html>	
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
        $inkOrdId =  $_REQUEST['inkOrdId'];
        $levId = $_REQUEST['levId'];
        $artId =  $_REQUEST['artId'];
        $inkOrdDatum = $_REQUEST['inkOrdDatum'];
        $inkOrdBestAantal = $_REQUEST['inkOrdBestAantal'];
        $inkOrdStatus = $_REQUEST['inkOrdStatus'];
          
        // Performing insert query execution
        // here our table name is KLANTEN
        $sql = "INSERT INTO INKOOPORDERS  VALUES ('$inkOrdId', 
            '$levId','$artId','inkOrdDatum','$inkOrdBestAantal','$inkOrdStatus')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$inkOrdId\n $levId\n "
                . "$artId\n $inkOrdDatum\n $inkOrdBestAantal\n $inkOrdStatus");
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