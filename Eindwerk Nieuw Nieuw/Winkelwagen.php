<?php
include 'connection.php';
include 'sessionCheckUser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Afbeeldingen/icoon.ico" type="image/x-icon">
    <title>Winkelwagen</title>
    
</head>
<body>

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
                        <?php echo "Product: " . $row['productID']; ?>
                    </div>
                    <div class="menu-item-image">
                    <img id="imgSchoenen" alt="eten" src="Afbeeldingen/<?php echo $row2['afbeelding'];?>">
                    
            </div>
        </div>
        </div>
        <button  id="del" onclick="location.href='deleteWinkelmandje.php?productID=<?php echo $row['productID']?>'">Delete</button>
        </div>
            
            

            
            
            <?php $totaal += $row2['prijs']; ?>
            <b>Aantal: </b><?php echo $row['aantal']; ?>
            <!-- <a href="del.php?productID=<?php echo $row['productID']; ?>">Verwijder</a> -->
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
