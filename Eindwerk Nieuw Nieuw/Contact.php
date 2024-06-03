<?php
// include 'connection.php';
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
    <title>Pita Pitstop</title>
</head>
<body>
    <!-- NavBar -->
    <?php include_once("navbar.php"); ?> 

    
    
    
    
    <!--                                                     Inhoud            -->

    <h1 class="contacth1">Contacteer ons!!! </h1>
    <form class="contact">
        <h1 class="from">Stuur ons een Mail</h1>
  
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
  
      <label for="message">Bericht:</label>
      <textarea id="message" name="message" required></textarea><br><br>
  
      <input type="submit" value="Versturen" onclick="Bedankt()">
    </form>
    <!-- Footer -->
    <?php include_once("footer.php"); ?> 
</body>
</html>