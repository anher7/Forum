<?php
    $servername = "localhost";
    $username = "Anher";
    $password = "hi2012";
    DEFINE("DB_USER", "Anher");
    DEFINE("DB_PASS", "anhur2012");


    try {
        $conn = new PDO("mysql:host=$servername;dbname=alfa", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>