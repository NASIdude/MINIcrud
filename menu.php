<?php
    include('includes/connect.php');

    $sql = "SELECT * FROM menu";
    $stmt = $connect->prepare($sql);
    // HIRE KUNNEN WE PARAMETERS VINDEN ALS DIE ER ZIJN
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    $result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/MiniCRUD.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php
            include "includes/header.php";
        ?>
    </header>
    <main>
    <div class="menu-container">
            <p>Onze menu!</p>
            <table class="menu-table">
                <tr>
                    <th>naam</th>
                    <th>beschrijving</th>
                    <th>prijs</th>
                    <th>categorie</th>
                </tr>
                <?php
                    if($rowCount > 0) {
                        foreach($result as $row) {
                    
                    ?>
                            <tr>
                                <td><?php echo $row['naam'];?></td>
                                <td><?php echo $row['beschrijving'];?></td>
                                <td><?php echo $row['prijs'];?></td>
                                <td><?php echo $row['categorie'];?></td>
                            </tr>

                            <?php   }   
                    }
                    ?>
                
            </table>
        </div>
    </main>
    <footer>
        <?php
            include "includes/footer.php";
        ?>
    </footer>
    <script src="javascript/menu.js"></script>
</body>
</html>