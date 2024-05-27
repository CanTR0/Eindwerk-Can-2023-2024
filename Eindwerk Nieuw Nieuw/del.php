<?php
    include 'connection.php';
    if(isset($_GET['ID'])){
        $id = $_GET['ID'];
        print "ID=". $id;
        $sql = "DELETE FROM `tblproducten` WHERE ID = '".$id."'";

        if ($conn->query($sql) === TRUE)
        {
            echo "Record deleted successfully";
            header('Location: addPage.php?melding=record verwijderd');

        }
        else 
        {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();

    }

?>