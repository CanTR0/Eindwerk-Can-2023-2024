<?php
    include 'connection.php';
    
    $naam = $_POST['naam'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];
    $afbeelding = $_POST['afbeelding'];
    /*
    print "naam: ".$naam;
    print "omschrijving: ".$omschrijving;
    print "prijs: ".$prijs;
    print "afbeelding: ".$afbeelding;*/


   $sql = "INSERT INTO `tblproducten` VALUES (NULL, '$naam', '$omschrijving', '$prijs','$afbeelding')";
  // print $sql;
   // $sql = "INSERT INTO `tblproducten` (`ID`, `naam`, `omschrijving`, `prijs`, `afbeelding`) VALUES (NULL, 'naam', 'test', 'prijs', '')";



    if ($conn->query($sql) === TRUE){
       header("Location: addPage.php?melding=Record toegevoegd");
    } else {
        echo "Error: " .$sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>