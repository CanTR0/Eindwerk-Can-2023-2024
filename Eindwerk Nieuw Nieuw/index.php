<!DOCTYPE html>
<html lang="en">
    <!-- Open in default browser vs Open in usbWebserver browser, vragen aan leerkracht op school. -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Afbeeldingen/icoon.ico" type="image/x-icon">
    <title>Pita Pitstop</title>
</head>
<body>
    <!-- /* LOGO TOEVOEGEN */ -->
    
<?php
        include_once("navbar.php");
    ?>  

    <div class="alles">
        <!--                                               Inhoud van Home                                    -->
    
        <div class="content-home">
    <div class="foto">
        <div class="text"><h1>Welkom bij Pita Pitstop</h1></div>
    </div>
</div>


        
        <!--                                               Inhoud van Menu                                    -->
        <div class="content-menu" id="NaarMenu">
            <h2 >Ontdek onze heerlijke gerechten</h2>
            <div class="menu-items">
                <div class="menu-item">
                    <div class="menu-item-content">
                        <h3>Frietjes</h3>
                        <p>Krokante frietjes geserveerd met een saus naar keuze. Heerlijk knapperig en goudbruin gebakken, bereid van verse aardappelen.</p>
                        <br>
                        <h3>Prijs: 3 euro</h3>
                    </div>
                    <div class="menu-item-image">
                        <img src="Afbeeldingen/frietjes.jpg" alt="Frietjes">
                    </div>
                    <button class="buy-button">Koop</button>
                </div>
                <div class="menu-item">
                    <div class="menu-item-content">
                        <h3>Menu's</h3>
                        <p>Kies uit onze diverse menu's, inclusief frietjes en een drankje. Onze menu's bieden een combinatie van smaken en keuzes die perfect zijn voor elke trek.</p>
                        <br>
                        <h3>Prijs: 10 euro</h3>
                    </div>
                    <div class="menu-item-image">
                        <img src="Afbeeldingen/menu.jpg" alt="Menu's">
                    </div>
                    <button class="buy-button">Koop</button>
                </div>
                <div class="menu-item" id="broodjeItem">
                    <div class="menu-item-content">
                        <h3>Broodje Kip</h3>
                        <p>Heerlijk vers bereid broodje met sappige kip, knapperige sla, plakjes tomaat en een vleugje mayonaise. Een smakelijke traktatie voor elk moment van de dag.</p>
                        <br>
                        <h3>Prijs: 7 euro</h3>
                        <br><button onclick="changeBroodje()">Klik voor Broodje Vlees</button>
                    </div>
                    <div class="menu-item-image">
                        <img src="Afbeeldingen/broodjekip.jpg" alt="Broodje Kip">
                    </div>
                    <button class="buy-button">Koop</button>
                </div>
                <div class="menu-item">
                    <div class="menu-item-content">
                        <h3>Nuggets</h3>
                        <p>Knapperige nuggets, perfect als snack of als onderdeel van een menu. Gemaakt van hoogwaardige ingrediënten en gebakken tot in de perfectie, elke hap is een genot voor de smaakpapillen.</p>
                        <br>
                        <h3>Prijs: 3 euro</h3>
                    </div>
                    <div class="menu-item-image">
                        <img src="Afbeeldingen/nuggets.png" alt="Nuggets">
                    </div>
                    <button class="buy-button">Koop</button>
                </div>
            </div>
        </div>
    </div>
    



    
    <!--                                                           Footer                           -->
    <?php
        include("footer.php");
    ?> 
    
<!--                                                               Javascript voor het veranderen van broodje                 -->
      

      <script>
    function changeBroodje() {
        const broodje = document.getElementById('broodjeItem');
        const imgElement = broodje.querySelector('img');
        const buttonElement = broodje.querySelector('button');

        if (imgElement.src.endsWith('kip.jpg')) {
            imgElement.src = 'Afbeeldingen/broodje_vlees.jpg';
            broodje.querySelector('h3').innerText = 'Broodje Vlees';
            broodje.querySelector('p').innerText = 'Heerlijk vers bereid broodje met mals vlees. ' +
                'Knapperige sla, plakjes tomaat en een vleugje mayonaise. Een smakelijke traktatie voor elk moment van de dag.';
            buttonElement.innerText = 'Liever Broodje Kip?';
        } else {
            imgElement.src = 'Afbeeldingen/broodjekip.jpg';
            broodje.querySelector('h3').innerText = 'Broodje Kip';
            broodje.querySelector('p').innerText = 'Heerlijk vers bereid broodje met sappige kip, ' +
                'knapperige sla, plakjes tomaat en een vleugje mayonaise. Een smakelijke traktatie voor elk moment van de dag.';
            buttonElement.innerText = 'Toch Broodje Vlees?';
        }
    }

      </script>
</body>
</html>