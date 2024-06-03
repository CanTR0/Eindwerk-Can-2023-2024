<?php
// include 'connection.php';
include 'sessionCheckUser.php';
?>
<?php 
    if(isset($_GET['melding'])){
        $melding=$_GET['melding'];
       ?><script>alert ("<?php print $melding;?>")</script> 
       <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Afbeeldingen/icoon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Producten toevoegen</title>
</head>
<body>
    
<?php 
      include 'navbar.php';
    ?>
    
<div class="container">
    <br><br><br>
    <!-- Form om producten toe te voegen -->
    <h2>Product toevoegen</h2>
    <div class="add">
        <form action="add2.php" method="post" enctype="multipart/form-data">
            <table >
             
                <tr>
                    <td>Naam:  </td>
                    <td><input type="text" name="naam" id="naam"></td>
                </tr>
                <tr>
                    <td>Omschrijving: </td>
                    <td><input type="text" name="omschrijving" id="omschrijving"></td>
                </tr>
                <tr>
                    <td>Prijs: </td>
                    <td><input type="number" name="prijs" id="prijs"> EUR</td>
                </tr>
                <td>Afbeelding: </td>
                <td><input type="text" name="afbeelding" id="afbeelding"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Toevoegen"></td> 
                </tr>
               
            </table>
        </form>
    </div>

    <!-- je producten -->
    <br><br><br><h2>Producten</h2>
        <table id="producten">
                <?php
                include 'connection.php';
                $sql = "SELECT * FROM `tblproducten`";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
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
                    <img src="Afbeeldingen/<?php echo $row['afbeelding'];?>" >
                    </div>
                    <button id="del" onclick="location.href='del.php?id=<?php echo $row['ID']?>'">DELETE</button>
                </div>
            </div>
        </div>
                <?php
                    };
                    $conn->close();
                ?>
        </table>
</div>
        <br>
        <!------------------------------ FOOTER ------------------------------>
   

<?php 
     include 'footer.php';
    ?>
</body>
</html>