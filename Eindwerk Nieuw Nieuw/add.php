<?php
    include 'connection.php';
    
    $naam = $_POST['naam'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];
    $afbeelding = $_POST['afbeelding'];

    //$sql = "INSERT INTO `tblproducten` (`ID`, `naam`, `omschrijving`, `prijs`, `afbeelding`) VALUES (NULL, '$naam', '$omschrijving', '$prijs', '$afbeelding')";
    $sql = "INSERT INTO `tblproducten` (`ID`, `naam`, `omschrijving`, `prijs`, `afbeelding`) VALUES (NULL, 'Pitta', 'test', '10', '')";



    if ($conn->query($sql) === TRUE){
        header("Location: addPage.php?melding=Record toegevoegd");
    } else {
        echo "Error: " .$sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>