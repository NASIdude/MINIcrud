<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="minicrud css/MiniCRUD.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php
            include("includes/header.php")
        ?>
    </header>
    <main>
        <?php
            include_once("includes/connect.php");
        ?>
    </main>
    <footer>
        <div class="footbar">
            <p>Gemaakt door Naser Jafari ©.</p>
        </div>
    </footer>
    <script src="js/alles.js"></script>
</body>
</html>