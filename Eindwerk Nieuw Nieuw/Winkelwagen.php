<?php
include 'connection.php';
include 'sessionCheckUser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Afbeeldingen/icoon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Winkelwagen</title>
    
</head>
<body>
    <style>
        .producten{
            margin-left: 1%;
        }
    </style>


    </style>
    <?php include "navbar.php"; ?>
    <div class="producten">
        <div>
            <br><br><br>

        </div>
        <?php
        if ($user!="Gast") {
            
            if (isset($_GET["productID"])) 
            {
                $product = $_GET['productID'];
                $aantal=1;
                print $klantID;
                
                $sql = "INSERT INTO `tblwinkelmandje` (`ID`, `klantID`, `productID`, `aantal`) VALUES (NULL, '$klantID', '$product', '$aantal')";
                if ($conn->query($sql) === TRUE) {
                    $melding = "Product is toegevoegd";
                    header("location: Winkelwagen.php?melding=$melding");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        ?>
        <h3>Winkelmandje van: <b><?php echo $user; ?></b></h3><br><br>
        
        <?php
        if ($user!="Gast")
         {
            $sql = "SELECT * FROM `tblwinkelmandje` WHERE klantID='$klantID'";
            $totaal = 0;
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            $product = $row['productID'];
            echo "Product: " . $row['productID'];
            $sql2 = "SELECT * FROM `tblproducten` WHERE id='$product'";
            $result2 = $conn->query($sql2);
            while ($row2 = $result2->fetch_assoc()) { ?>


    <div class="product">
        <div class="menu-items">
                <div class="menu-item">
                    <div class="menu-item-content">
                        <h3><?php echo $row2['naam']; ?></h3><br>
                        <p><b>Omschrijving: </b><?php echo $row2['omschrijving']; ?></p>
                        <br>
                        <p class="prijs"><b>Prijs: </b>€ <?php echo $row2['prijs']; ?></p>
                    </div>
                    <div class="menu-item-image">
                    <img id="imgSchoenen" alt="schoenen" src="Afbeeldingen/<?php echo $row2['afbeelding'];?>">
                    </div>
                    <button class="buy-button" id="del" onclick="location.href='Winkelwagen.php?productID=<?php echo $row['productID']?>'">DELETE</button>
                </div>
            </div>
        </div>

            
            

            
            
            <?php $totaal += $row2['prijs']; ?>
            <b>Aantal: </b><?php echo $row['aantal']; ?>
            <a href="Winkelwagen.php?productID=<?php echo $row['productID']; ?>">Verwijder</a>
            <?php }
            }
            $conn->close(); ?>
            <p>Totaal: € <?php echo $totaal; ?></p>

            
            <h4>Totale prijs: <?php echo $totaal; ?> euro</h4>
            <?php if ($totaal > 0) { ?>
                <button onclick="location.href='orderverwerken.php'">Koop</button>
            <?php } }
            else{
                print"Je moet eerst inloggen om een winkelmandje te gerbuiken.";
            }
            ?>
        
        
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
