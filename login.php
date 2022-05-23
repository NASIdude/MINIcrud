<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/MiniCRUD.css">
</head>
<body>
    <div class="return-home">
        <a href="home.php">Ga terug naar home!</a>
    </div>
    <div class="login-scherm">
        <form action="php/checklogin.php" method="post">
            <label for="gebruiker"><b>Gebruikers naam</b></label><br>
            <input type="text" placeholder="Vul gebruikers naam. . ." name="gebruiker" required><br>
            <label for="wachtwoord"><b>Wachtwoord gebruiker</b></label><br>
            <input type="password" placeholder="Vul gebruikers wachtwoord" name="wachtwoord" required><br>
            <button type="submit" name="submit" value="submit">Login</button>
        </form>
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
    <script src="javascript/alles.js"></script>
</body>
</html>