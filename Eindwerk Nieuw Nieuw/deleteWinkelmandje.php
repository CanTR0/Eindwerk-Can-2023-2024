<?php
    $klantID="";
    session_start();
    include_once "sessionCheckUser.php";

    if(isset($_GET['productID'])){
        include 'connection.php';
        $id = $_GET['productID'];
        print "ID=". $id;
        $sql = "DELETE FROM `tblwinkelmandje` WHERE productID = '$id' AND klantID='$klantID'";
        
        if ($conn->query($sql) === TRUE)
        {
            header('Location: winkelwagen.php');
        }
        else
        {
            echo "Error deleting record: " .$conn->error;

        }
        $conn->close();
    }
?>