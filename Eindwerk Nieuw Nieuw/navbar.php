<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pitstop</title>
    
        <!-- CSS only -->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

	   <!-- Voeg ook logo toe -->
        
    </head>
<body>
<div class="header">
        <div class="logo">Pita Pitstop</div>
        
        <div class="Navbar">
            <a href="index.php">Home</a>

            <a href="addPage.php">Nieuwe toevoegen</a>
            <a href="Producten.php"> Menu</a>
            
             
            <a href="About.php">Over Ons</a>
            <a href="Contact.php">Contact</a>
            <a href="Winkelwagen.php">Winkelwagen</a>
            <a href="signupForm.php"><i class="bi bi-person"></i></a>
            <?php if ($user=='Admin') print '<a class="nav-link" href="addPage.php">Aanvallers toevoegen</a></li>' ?>
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

        <a href="addPage.php">Nieuwe toevoegen</a>
        <a href="Producten.php"> Producten</a>
        
          
        <a href="About.php">Over Ons</a>
        <a href="Contact.php">Contact</a>
        <a href="Winkelwagen.php">Winkelwagen</a>
        <a href="signupForm.php"><i class="bi bi-person"></i></a>
    </div>
    
</body>
</html>