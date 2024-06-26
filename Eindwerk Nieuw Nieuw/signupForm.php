
<?php
$user="Gast";
session_start();
if (isset($_SESSION["user"]))
{
   $user=$_SESSION["user"];
}
?>
<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Afbeeldingen/icoon.ico" type="image/x-icon">
    <title>PitaPitstop Signup</title>  
</head>
<body>
    
    <?php
        include_once("navbar.php");
    ?>       
    <br><br><br><br><br>
        <div class="row">
            <h1 style="text-align: center;">Sign Up</h1>
        </div>
    <!-- <div class="container">     -->
    <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <form class="form-container form-inline" action="signup.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="InputName">Gebruikersnaam</label>
                <i class="bi bi-person"></i><br>
                <input type="text" name="username" id="username" class="form-control" required>                                    
            </div>
            <div class="form-group">
                <label for="InputPassword1">Password</label>
                <i class="bi bi-lock-fill"></i><br>
                <input type="password" name="password1" id="password1" class="form-control" required >                                    
            </div>
            <div class="form-group">
                <label for="InputPassword2">Password (herhaal)</label>
                <i class="bi bi-lock-fill"></i><br>
                <input type="password" name="password2" id="password2" class="form-control" required >                                    
            </div>
            <div class="form-group">
                <br><br>
                <input class="btn btn-primary" type="submit" value="SUBMIT" alt="person">
            </div>
            <div class="form-footer">
                <p>Heb je al een account? <a href="login.php">Login</a></p>
            </div>
            <?php if (isset($_GET["melding"])) { $melding=$_GET["melding"];}?>
            <p id="fout"><?php if (isset($_GET["melding"])) { print $melding;}?></p>
        </form>
    </div>
</div>

    
    

    <img src="img/add-user.png" alt="" style="background-color: white; display: block; margin: 0 auto; height: 150px;">
    <br>
    <?php
        include("footer.php");
    ?> 
</body>     
</html>
 