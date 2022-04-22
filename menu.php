<?php
    include("../includes/connect.php");
    
    if(isset('submit')) {
        $search = $_POST['search']
        $sql = "SELECT * FROM menu WHERE naam LIKE '%".$_POST["searchbar"]."%' ";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        $result = $stmt->fetchAll();
    }
    else {
        $sql = "SELECT * FROM menu";
    }
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
        <div class="searchbar">
            <form method="POST">
                <input type="text" placeholder="Zoek hier het gerecht" name="search">
                <button type="submit" name="submit" >Submit</button>
            </form>
        </div>
        
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