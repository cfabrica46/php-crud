<?php
    $dbHost = getenv("MYSQL_HOST");
    $dbUsername = "cfabrica46";
    $dbPassword = "ABcd_1234";
    $dbName = "test";

    if (!$dbHost){
        $dbHost = "localhost";
    }

    #POO option
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error){
        die("Connectionfailed: ". $conn->connect_error);
    }
?>
