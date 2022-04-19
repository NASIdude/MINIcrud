<?php
    include("../includes/connect.php");
    $msg = "";

    if(isset($_POST['naam']) && isset($_POST['beschrijving']) && isset($_POST['prijs']) && isset($_POST['categorie'])) {
        
        $sql = "INSERT INTO menu (naam, beschrijving, prijs, categorie) VALUES(:naam, :beschrijving, :prijs, :categorie)";
          
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
        $stmt->bindParam(":prijs", $_POST['prijs']);
        $stmt->bindParam(":categorie", $_POST['categorie']);
        $stmt->execute();
        
        $msg = "Gerecht is toegevoegd"

        header("Location: /read.php");
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
    <link rel="stylesheet" href="css/MiniCRUD.css">
</head>
<body> 
    <main>
        <div class="create form">
        <h2>Voeg hier een gerecht toe</h2>
            <form action="create.php" method="post">
            <label for="naam">Naam gerecht</label>
            <input type="text" name="naam" placeholder="Naam gerecht">
            <label for="beschrijving">Beschrijving gerecht</label>
            <input type="textarea" name="beschrijving" placeholder="Beschrijving gerecht" id="beschrijving">
            <label for="prijs">Prijs gerecht</label>
            <input type="text" name="prijs" placeholder="Prijs gerecht" id="prijs">
            <label for="phone">Categorie</label>
            <input type="text" name="categorie" placeholder="Categorie" id="categorie">
            <!-- <label for="created">Datum</label>
            <input type="datum" name="datum" value="<?=date('Y-m-d\TH:i')?>" id="datum"> -->
            <input type="submit" name="sumbit">
        </form>
    </div>
    </main>
</body>
</html>