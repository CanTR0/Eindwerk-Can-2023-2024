<?php
$user="Gast";
if (isset($_SESSION["user"]))
{
   $user=$_SESSION["user"];
}
 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
       <link rel="shortcut icon" href="Afbeeldingen/icoon.ico" type="image/x-icon">
        <title>Pitstop</title>
	   <!-- Voeg ook logo toe -->
        
    </head>
<body>
    <style>
        .Navbar{
            text-align:center;
        }
    </style>
<div class="header">
        <div class="logo">Pita Pitstop <?php if ($user != 'Gast') print '<i class="bi bi-circle-fill"></i>'; ?></div>
        
        <div class="Navbar">
            <a href="index.php">Home</a>
        
            <?php if ($user=='admin') print '<a href="addPage.php">Nieuwe product</a>' ?>
            <a href="Producten.php"> Menu</a>
            
             
            <a href="About.php">Over Ons</a>
            <a href="Contact.php"><i class="bi bi-person-lines-fill"></i> Contact</a>
            <a href="Winkelwagen.php"><i class="bi bi-cart"></i>Winkelwagen</a>
            
            <?php if ($user == 'Gast') print '<a href="login.php"><i class="bi bi-person"></i>Login</a>'; ?>
            <a href="logout.php" style="text-decoration: none;"><?php if ($user!='Gast') print '<i class="bi bi-person"></i>Logout</a></li>';?>
            
           
        </div>

        <div class="hamburger-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    <!-- Na verkleinen dit terug zichtbaar maken -->
    <div class="Navbar-Klein">
        <a href="index.php">Home</a>

        <?php if ($user=='admin') print '<a href="addPage.php">Nieuwe product</a>' ?>
        <a href="Producten.php"> Menu</a>
        
          
        <a href="About.php">Over Ons</a>
        <a href="Contact.php"><i class="bi bi-person-lines-fill"></i>Contact</a>
        <a href="Winkelwagen.php"><i class="bi bi-cart"></i>Winkelwagen</a>
            
        <a href="login.php"><i class="bi bi-person"></i></a>
        
    </div>
    
</body>
</html>