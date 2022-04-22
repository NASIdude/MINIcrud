<?php
    include_once("includes/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/MiniCRUD.css">
</head>
<body>
    <header>
        <nav id="navbar">
            <ul>
                <li><a href="php/logout.php">Uitloggen</a></li>
            </ul>
        </nav>
    </header>
    <div class="admin">
    <h1>Welkom admin!</h1>
        <a href="php/logout.php">Log hier uit!</a>
    </div>
    <div class="menu-aanpassen">
        <a href="php/read.php">Pas hier het menu aan, kijk hier ook de berichten van klanten!</a>
    </div>
    <footer>
    <div class="inner-footer flex"></div>
            <div>   
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                 </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(78, 0, 194" />
                        <use xlink:href="#gentle-wave" x="48" y="2" fill="#CFBFF7" />
                        <use xlink:href="#gentle-wave" x="48" y="4" fill="rgba(60, 103, 227)" />
                        <use xlink:href="#gentle-wave" x="48" y="6" fill="rgba(93, 220, 255)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="#fff" />
                    </g>
                </svg>
            </div>
    </footer>
    <script src="javascript/menu.js"></script>
</body>
</html>