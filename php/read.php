<?php
    include("../includes/connect.php");

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
    <title>Document</title>
</head>
<body>
    <div class="container">
            <p>Voeg hier een gerechten toe!</p>
            <a href="create.php">Voeg hier een gerecht toe</a>
            <table class="table">
                <tr>
                    <th>ID</th>
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
                                <td><?php echo $row['ID'];?></td>
                                <td><?php echo $row['naam'];?></td>
                                <td><?php echo $row['beschrijving'];?></td>
                                <td><?php echo $row['prijs'];?></td>
                                <td><?php echo $row['categorie'];?></td>
                                <td><a class="creëer-knop" href="create.php?id=<?php echo $row['ID']; ?>">
                                </a><a class="update-knop" href="update.php?id=<?php echo $row['ID']; ?>">
                                update</a>&nbsp;<a class="delete-knop" href="delete.php?id=<?php echo $row['ID']; ?>">
                                delete</a></td>
                            </tr>

                            <?php   }   
                    }
                    ?>
                
            </table>
        </div>
</body>
</html>