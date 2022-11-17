<?php
    $servername = "localhost";
    $database   = "database_airport";
    $username   = "root";         // Change with your database username
    $password   = "";         // Change with your database password, leave it blank if your database doesn't has password
    
    // Create connection
    $connection = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>