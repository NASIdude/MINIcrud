<?php
    include_once("../includes/connect.php");
    
    if (isset($_GET['id'])) {

        $sql = "DELETE FROM menu WHERE id = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();

        header("Location: http://localhost/MINIcrud/php/read.php");
        exit();
    }
    else {
        header("Location: http://localhost/MINIcrud/php/read.php");
        exit();
    }
?>
