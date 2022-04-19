<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/MiniCRUD.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6d463992be.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php
            include "includes/header.php";
        ?>
    </header>
    <main>
        <div class="info-landing-page">
            <img src="afbeeldingen/nieuwe achtergrond.jpg" alt="pizza in de oven">
            <div class="logo-landing-page">
                <img src="afbeeldingen/logo pizzeria.png" alt="logo pizzeria">
            </div>
        </div>
        <div class="begin-stuk">
            <img src="afbeeldingen/main achtergrond.jpg" alt="pizza in de oven">
            <div class="begin-welkom-tekst">
                <h1>Welkom</h1>
                <p>bij Ling Ling's pizzeria! Onze authentieke pizza's zijn beroemd in de buurt en worden al ruim 20 jaar in een steenoven gebakken.</p>
            </div>
        </div>
        <div class="tussenruimteblok1">
            <img src="afbeeldingen/BBC-Logo.png" alt="bbc logo">
            <p>"Ling Ling's Pizzeria verdient een plekje in ons hart!"</p>
        </div>
        <div class="slideshow">
            <img class="mySlides" src="afbeeldingen/foto1 slideshow.jpg">
            <img class="mySlides" src="afbeeldingen/foto3 slideshow.jpg">
            <img class="mySlides" src="afbeeldingen/foto4 slideshow.jpg">
            <img class="mySlides" src="afbeeldingen/foto6 slideshow.jpg">
            <img class="mySlides" src="afbeeldingen/foto7 slideshow.jpg">
            <img class="mySlides" src="afbeeldingen/foto8 slideshow.jpg">
        </div>
        <div class="menu-link">
            <a href="menu.php">Bestel hier je eten!</a>
        </div>
    </main>
    <footer>
        <?php
            include "includes/footer.php";
        ?>
    </footer>
    <script src="javascript/alles.js"></script>
</body>
</html>