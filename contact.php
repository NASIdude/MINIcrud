<?php
    include("includes/connect.php");

    if(isset($_POST['naam']) && isset($_POST['bericht'])) {
        
        $sql = "INSERT INTO contact (naam, land, bericht) VALUES(:naam, :land, :bericht)";
          
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":land", $_POST['land']);
        $stmt->bindParam(":bericht", $_POST['bericht']);
        $stmt->execute();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/MiniCRUD.css">
</head>
<body>
    <header>
        <?php 
            include("includes/header.php");
        ?>
    </header>
    <main>
        <div class="contact-container">
            <form method="POST">
            <label for="naam">Naam</label>
            <input type="text" id="naam" name="naam" placeholder="Jouw naam.." required>
            <label for="bericht">Bericht</label>
            <textarea id="bericht" name="bericht" placeholder="Vertel je mening . . ." required></textarea>
            <label for="naam">Land</label>
            <input type="text" id="land" name="land" placeholder="Land . . ." required>
            
            <input type="submit" value="submit">
            </form>
        </div>
    </main>
    <footer>
        <?php 
            include("includes/footer.php");
        ?>
    </footer>
</body>
</html>