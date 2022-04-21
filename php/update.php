<?php
    include_once("../includes/connect.php");

    if (isset($_POST['update'])) {

            $sql = "UPDATE menu SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, categorie = :categorie WHERE id = :id";
        
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":id", $_POST['id']);
            $stmt->bindParam(":naam", $_POST['naam']);
            $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
            $stmt->bindParam(":prijs", $_POST['prijs']);
            $stmt->bindParam(":categorie", $_POST['categorie']);
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
        <h2>Update hier een gerecht</h2>
        <form action="#" method="post">
            <label for="naam">Huidig ID</label>
            <input type="text" name="id" placeholder="Naam gerecht" value="<?php echo $_GET['id']; ?>" readonly>
            <label for="naam">Naam gerecht</label>
            <input type="text" name="naam" placeholder="Naam gerecht">
            <label for="beschrijving">Beschrijving gerecht</label>
            <input type="textarea" name="beschrijving" placeholder="Beschrijving gerecht" id="beschrijving">
            <label for="prijs">Prijs gerecht</label>
            <input type="text" name="prijs" placeholder="Prijs gerecht" id="prijs">
            <label for="categorie">Categorie</label>
            <input type="text" name="categorie" placeholder="Categorie" id="categorie">
            <input type="submit" name="update" value="update">
        </form>
    </div>
        <div class="return-knop-update">
            <p><a href="read.php">Stoppen</a></p>
        </div>
    </div>
</body>
</html>