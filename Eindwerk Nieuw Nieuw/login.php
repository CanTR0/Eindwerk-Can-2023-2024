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
    <title>PitaPitstop Login</title>
</head>
<body>
    
    <?php
    include_once("navbar.php");
    ?> 
    <br><br><br><br><br>
    <div class="row">
            <h1 style="text-align: center;">Log in</h1>
        </div>
    <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <form class="form-container form-inline" action="checklogin.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="InputName">Gebruikersnaam</label>
                <i class="bi bi-person"></i>
                <input type="text" name="username" id="username" class="form-control" required>                                    
            </div>
            <div class="form-group">
                <label for="InputPassword1">Password</label>
                <i class="bi bi-lock-fill"></i>
                <input type="text" name="password" id="password" class="form-control" required>                                    
            </div>
            <br><br><br>
            <input class="btn btn-primary" type="submit" value="SUBMIT" alt="person">
            <div class="form-footer">
                <p>Heb je nog geen account? <a href="signupForm.php">Sign Up</a></p>
                <?php if (isset($_GET["melding"])) { $melding=$_GET["melding"];}?>
                <p id="fout"><?php if (isset($_GET["melding"])) { print $melding;}?></p>
            </div>
        </form>
        </div>
        </div>


        <!-- voeg foto toe.. -->
    <img src="img/nizd" alt="" style="background-color: white; display: block; margin: 0 auto; height: 150px;">
    
    <br><br>
    <?php 
    include_once("footer.php");
    ?> 
</body>
</html>