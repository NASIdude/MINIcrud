<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "minicrud";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION;
    }
}

$conn = null;
?>