<?php
    include_once("../includes/connect.php");

    if (isset($_POST['submit'])) {
    
        $sql = "SELECT gebruiker FROM account WHERE gebruiker = :gebruiker AND wachtwoord = :wachtwoord";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":gebruiker", $_POST['gebruiker']);
        $stmt->bindParam(":wachtwoord", $_POST['wachtwoord']);
        $stmt->execute();
        $result = $stmt->fetch();

        if (isset($result['gebruiker']) && $result['gebruiker'] === 'admin') {
            session_start();

            $_SESSION["admin"] = true;
    
            header("Location: ../admin.php");
            exit();
        } else {
            header("Location: ../login.php");
            exit();
        }
    } else {
        header("Location: ../login.php");
        exit();
    }
?>
