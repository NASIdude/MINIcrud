<?php
    include("../includes/connect.php");
    
    if (isset($_POST['update'])) {

        $sql = "UPDATE menu SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, beschrijving = :beschrijving WHERE id = :id";
    
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_POST['id-gerecht']);    
        $stmt->bindParam(":naam", $_POST['update-gerecht']);
        $stmt->bindParam(":beschrijving", $_POST['update-beschrijving']);
        $stmt->bindParam(":prijs", $_POST['update-prijs']);
        $stmt->bindParam(":categorie", $_POST['update-categorie']);
        $stmt->execute();
        
        header("Location: http://localhost/MINIcrud/php/read.php"); 
        exit();
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/MiniCRUD.css">
</head>
<body>
    <div class="update-form">
        <h2>Update hier je gerecht</h2>
        <form action="http://localhost/MINIcrud/php/read.php" method="post">
            <input type="hidden" name="id" value="id">
            <label for="update-naam">Update gerecht</label><br>
            <input type="text" id="update-naam" name="update-gerecht" placeholder="Naam gerecht"><br>
            <label for="update-beschrijving">Update beschrijving</label><br>
            <input type="textarea" id="update-beschrijving" name="update-beschrijving" placeholder="beschrijving gerecht"><br>
            <label for="update-prijs">Update prijs</label><br>
            <input type="text" id="update-prijs" name="update-prijs" placeholder="Update gerecht"><br>
            <label for="update-categorie">Update Categorie</label><br>
            <input type="text" id="update-categorie" name="update-beschrijving" placeholder="Update categorie"><br><br>
            <input type="submit" value="update" name="update">
        </form>
        <div class="return-knop-update">
            <p><a href="read.php">Ga terug</a></p>
        </div>
    </div>
</body>
</html>