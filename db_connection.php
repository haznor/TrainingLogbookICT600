<?php

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "logbook";

    $conn = mysqli_connect ($servername,$dbusername, $dbpassword, $dbname) or die('Error connnecting to Database');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // After executing the SQL statement
    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }
    
?>
   