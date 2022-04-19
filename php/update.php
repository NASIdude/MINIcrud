<?php
    include("../includes/connect.php");
    $msg = "";

    if (isset($_POST['update']) && isset($_POST['id'])) {
        $sql = "UPDATE menu SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, categorie = :categorie WHERE id = :id";
          
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
        $stmt->bindParam(":prijs", $_POST['prijs']);
        $stmt->bindParam(":categorie", $_POST['categorie']);
        $stmt->execute();

        $msg = "Gerecht is geupdated"
        
        header("Location: php/read.php");
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
        <div class="update form">
        <h2>Update hier het gerecht!</h2>
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
            <input type="submit" name="update">
        </form>
    </div>
    </main>
</body>
</html>