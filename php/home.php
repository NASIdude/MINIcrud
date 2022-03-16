<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="minicrud css/MiniCRUD.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6d463992be.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="https://github.com/" target="_blank">Github</a></li>
                <li><a href="https://www.minecraft.net/nl-nl"  target="_blank">Minecraft</a></li>
                <li><a href="https://www.nintendo.nl/#" target="_blank">Nintendo</a></li>
                <li><a href="https://www.w3schools.com//" target="_blank">W3Schools</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="info-landing-page">
            <img src="afbeeldingen/nieuwe achtergrond.jpg" alt="pizza in de oven">
            <div class="info-landing-page-tekst">
                <h1>Welkom bij Ling Ling's Pizzeria 🍕.</h1>
                <span>Bij onze 69 vestigingen in heel Nederland.</span>
                <p>Gemaakt door onze beste chefs.</p>
            </div>
        </div>
        <div class="begin-stuk">
            <h2>Welkom</h2>
            <div class="welkom-tekst">
                <p>Onze authentieke pizza's zijn beroemd in de buurt en wordt al ruim 20 jaar in een steenoven gebakken.</p>
            </div>
        </div>
        <form action="menu.php" method="post">
            <input type="text" name="voornaam" placeholder="voornaam">
            <input type="text" name="achternaam" placeholder="achternaam">
            <input type="text" name="plaats" placeholder="plaats">
            <div class="knop-menu">
                <input type="submit" value="submit" name="knop">
            </div>
        </form>
    </main>
    <footer>
        <div class="footbar">
            <p>Gemaakt door Naser Jafari ©.</p>
        </div>
    </footer>
    <script src="./javascript/alles.js"></script>
</body>
</html>