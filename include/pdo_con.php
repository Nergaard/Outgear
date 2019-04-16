<?php 
    // Lokal DB
    $servername = "localhost";
    $db_name = "outgear";
    $db_username = "root";
    $db_password = "root";
    

    
    try {

        // Forsøker å logge inn til databasen
        $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);

    } catch (PDOException $e) {

        // Send error ved feil i databasetilkoblingen
        exit('Database connection error');

    }