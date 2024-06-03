<?php
// include 'connection.php';
include 'sessionCheckUser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Afbeeldingen/icoon.ico" type="image/x-icon">

    <title>Menu</title> 
    
</head>
<body>
<!------------------------------ NAVIGATIEBALK ------------------------------>
<?php 
     include 'navbar.php';
    ?>
<!------------------------------ PRODUCTEN  ------------------------------>

    
    

    <br><br><br>
	<h1 style="text-align: center;">Menu</h1>
    <main class="container">
    <div class="row">
        <?php
        include 'connection.php';
        $sql = "SELECT * FROM `tblproducten`";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
        ?>
        <div class="product">
        <div class="menu-items">
                <div class="menu-item">
                    <div class="menu-item-content">
                        <h3><?php echo $row['naam']; ?></h3><br>
                        <p><b>Omschrijving:</b> <?php echo $row['omschrijving']; ?> </p>
                        <br>
                        <p class="prijs"><b>Prijs: </b> <?php echo $row['prijs']; ?> </p>
                    </div>
                    <div class="menu-item-image">
                    <img id="imgSchoenen" alt="schoenen" src="Afbeeldingen/<?php echo $row['afbeelding']; ?> ">
                    </div>
                    
                <button><a class="buy-button" href="Winkelwagen.php?productID=<?php echo $row['ID']; ?>">Koop</a></button>
                </div>
            </div>
        </div>
        <?php };
        $conn->close();?>
    </div>
</main>
    
   
<!------------------------------ FOOTER ------------------------------>
    
<?php 
     include 'footer.php';
    ?>


</body>
</html>