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
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Afbeeldingen/icoon.ico" type="image/x-icon">
    <title>Pita Pitstop</title>
</head>
<body>
    <!-- NavBar -->
    <?php include_once("navbar.php"); ?> 

    
    
    
    <!--                                                     Inhoud            -->

    <div class="About-Inhoud">
        <h1 class="About-Title">Informatie over ons website</h1><br>

        <section>
            <div class="Tekst-Info">
                <h2>Oprichting en Geschiedenis</h2>
                <p>Pita Pitstop werd opgericht in 1998 door Can ünal. Geïnspireerd door de mediterrane keuken wilden ze verse, smaakvolle en gezonde pita's aanbieden.</p>
            </div>

            <div class="Tekst-Info">
                <h2>Missie en Visie</h2>
                <p>De missie van Pita Pitstop is om gezonde, smaakvolle en betaalbare maaltijden te serveren. Ze willen een plek bieden waar mensen kunnen genieten van vers bereide gerechten.</p>
            </div>

            <div class="Tekst-Info">
                <h2>Groei en Uitbreiding</h2>
                <p>Begonnen als een klein familiebedrijf, werd Pita Pitstop al snel populair. In 2005 openden ze hun tweede locatie en breidden ze daarna verder uit naar verschillende steden.</p>
            </div>

            <div class="Tekst-Info">
                <h2>Menu en Specialiteiten</h2>
                <p>Pita Pitstop biedt een gevarieerd menu met mediterrane smaken, inclusief klassiekers zoals kip broodje kip en nuggets, evenals frietjes en menu's.</p>
            </div>

            <div class="Tekst-Info">
                <h2>Duurzaamheid</h2>
                <p>Ze gebruiken biologisch afbreekbare verpakkingen en ondersteunen lokale boeren. Pita Pitstop is actief in de gemeenschap door sponsoring en samenwerking met scholen.</p>
            </div>

            <div class="Tekst-Info">
                <h2>Toekomstvisie</h2>
                <p>Pita Pitstop plant verdere uitbreiding, zowel nationaal als internationaal, en blijft zich inzetten voor versheid, kwaliteit en gemeenschapsbetrokkenheid.</p>
            </div>
        </section>

    </div>









    <!-- Footer -->
    <?php include_once("footer.php"); ?> 
</body>
</html>