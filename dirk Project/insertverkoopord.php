<?php
    if(isset($_POST["insert"]) && $_POST["insert"] == "Toevoegen"){
        
        include 'verkoop.php';
        include 'conn.php';
        $conn = dbConnect();
        
        $verkooporder = new Acteur;
        //$acteur->setObject(0, $_POST['voornaam'], $_POST['achternaam']);
        //$acteur->insertActeur($conn);
        $verkooporder->insertverkooporder2($conn, $_POST['artid']);
            
        echo "<script>alert('Artikel: $_POST[artid] is toegevoegd')</script>";
            
    } 
?>