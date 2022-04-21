<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallerij</title>
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
        <div class="tekst-galerij">
            <h1>Hier onze galerij!</h1>
        </div>
        <div class="galerij">
        <img class="mySlides" src="afbeeldingen/foto1 slideshow.jpg">
            <img class="mySlides" src="afbeeldingen/foto3 slideshow.jpg">
            <img class="mySlides" src="afbeeldingen/foto4 slideshow.jpg">
            <img class="mySlides" src="afbeeldingen/foto6 slideshow.jpg">
            <img class="mySlides" src="afbeeldingen/foto7 slideshow.jpg">
            <img class="mySlides" src="afbeeldingen/foto8 slideshow.jpg">
        </div>
    <footer>
        <?php
            include "includes/footer.php";
        ?>
    </footer>
    <script src="javascript/menu.js"></script>
</body>
</html>