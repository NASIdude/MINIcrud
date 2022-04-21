<?php
    include_once("../includes/connect.php");

    if (isset($_POST['submit']))
    {
        $sql = "SELECT naam FROM gebruiker WHERE naam = :naam AND wachtwoord = :wachtwoord";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":wachtwoord", $_POST['wachtwoord']);
        $stmt->execute();
        $result = $stmt->fetch();

        if (isset($result['naam']) && $result['naam'] === 'admin') {
            session_start();

            $_SESSION["admin"] = true;
    
            header("Location: ../admin.php");
            exit();
        } else {
            header("Location: ../index.php");
            exit();
        }
    } else {
        header("Location: ../login.php");
        exit();
    }
?>