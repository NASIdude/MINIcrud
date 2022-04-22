<?php
    include("../includes/connect.php");

    if(isset($_POST['naam']) && isset($_POST['beschrijving']) && isset($_POST['prijs']) && isset($_POST['categorie'])) {
        
        $sql = "INSERT INTO menu (naam, beschrijving, prijs, categorie) VALUES(:naam, :beschrijving, :prijs, :categorie)";
          
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
        $stmt->bindParam(":prijs", $_POST['prijs']);
        $stmt->bindParam(":categorie", $_POST['categorie']);
        $stmt->execute();
        
        header("Location: http://localhost/MINIcrud/php/read.php"); 
        exit();
    }
    if(isset($_POST['naam']) && isset($_POST['land']) && isset($_POST['bericht'])) {
        
        $sql = "INSERT INTO contact (naam, land,bericht) VALUES(:naam, :land, :bericht)";
          
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":land", $_POST['land']);
        $stmt->bindParam(":bericht", $_POST['bericht']);
        $stmt->execute();
        
        header("Location: http://localhost/MINIcrud/php/read.php"); 
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="../css/MiniCRUD.css">
</head>
<body> 
    <main>
        <div class="create-form">
            <p>Voeg hier een gerecht toe</p>
            <form action="create.php" method="post">
                <label for="naam">Naam gerecht</label>
                <input type="text" name="naam" placeholder="Naam gerecht" required>
                <label for="beschrijving">Beschrijving gerecht</label>
                <input type="textarea" name="beschrijving" placeholder="Beschrijving gerecht" id="beschrijving" required>
                <label for="prijs">Prijs gerecht</label>
                <input type="text" name="prijs" placeholder="Prijs gerecht" id="prijs" required>
                <label for="phone">Categorie</label>
                <input type="text" name="categorie" placeholder="Categorie" id="categorie" required>
                <input type="submit" name="sumbit" value="create">
            </form>
        </div>
    <div class="button-goback-read">
        <p>Als u wilt dat er centen op staat doe, dan een punt in plaats van een komma( , ).</p>
        <a href="read.php">Ga terug</a>
    </div>
    </main>
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
</body>
</html>