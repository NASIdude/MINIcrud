<?php
    include_once("../includes/connect.php");
    
    $sql_menu = "SELECT * FROM menu";
    $sql_contact = "SELECT * FROM contact";
    $stmt_menu = $connect->prepare($sql_menu);
    $stmt_contact = $connect->prepare($sql_contact);
    // HIRE KUNNEN WE PARAMETERS VINDEN ALS DIE ER ZIJN
    $stmt_menu->execute();
    $stmt_contact->execute();
    $rowCount_menu = $stmt_menu->rowCount();
    $rowCount_contact = $stmt_contact->rowCount();
    $result_menu = $stmt_menu->fetchAll();
    $result_contact = $stmt_contact->fetchAll();       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="../css/MiniCRUD.css">
</head>
<body>
    <div class="return-admin">
        <a href="http://localhost/MINIcrud/admin.php">Ga terug</a>
    </div>
    <div class="menu-container">
            <p>Welkom Admin!</p>
            <a href="create.php">Voeg hier een gerecht toe</a>
            <table class="table-menu">
                <tr>
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Beschrijving</th>
                    <th>Prijs</th>
                    <th>Categorie</th>
                    <th>Update/Delete</th>
                </tr>
                <?php
                    if($rowCount_menu > 0) {
                        foreach($result_menu as $row_menu) {
                    
                    ?>
                            <tr>
                                <td><?php echo $row_menu['id'];?></td>
                                <td><?php echo $row_menu['naam'];?></td>
                                <td><?php echo $row_menu['beschrijving'];?></td>
                                <td><?php echo $row_menu['prijs'];?></td>
                                <td><?php echo $row_menu['categorie'];?></td>
                                <td><a class="creëer-knop" href="create.php?id=<?php echo $row_menu['id']; ?>">
                                </a><a class="update-knop" href="update.php?id=<?php echo $row_menu['id']; ?>" name="update">
                                update</a>&nbsp;<a class="delete-knop" href="delete.php?id=<?php echo $row_menu['id']; ?>"  name="delete">
                                delete</a></td>
                            </tr>

                            <?php   }   
                    }
                    ?>
                
            </table>
        </div>
        <div class="blok-read">
        </div>
        <div class="contact-container">
            <p>Contacten!</p>
            <table class="contact-table">
                <tr>
                    <th>ID</th>
                    <th>Gebuiker</th>
                    <th>Land</th>
                    <th>Bericht</th>
                </tr>
                <?php
                    if($rowCount_contact > 0) {
                        foreach($result_contact as $row_contact) {
                    
                    ?>
                            <tr>
                                <td><?php echo $row_contact['id-contact'];?></td>
                                <td><?php echo $row_contact['naam'];?></td>
                                <td><?php echo $row_contact['land'];?></td>
                                <td><?php echo $row_contact['bericht'];?></td>
                            </tr>

                            <?php   }   
                    }
                    ?>
                
            </table>
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
</body>
</html>