<?php
    //Database Conneection
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "studentdb1";

    //create connection string
    $conn = mysqli_connect($host, $username, $password, $database);

    //check connection
    if(!$conn) {
        die ("Connection Failed: " .mysqli_connect_error());
    }

?>
