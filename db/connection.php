<?php

    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "GeNet";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

?>