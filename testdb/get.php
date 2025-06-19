<?php 
    include "config.php";

    //get the table ID from Url
    $id = $_GET['id'];

    //delete choosen article from the datbase
    $query = "DELETE FROM studenttable WHERE id=$id";
    mysqli_query($conn, $query);


    //redirect to homepage
    header("Location: index.php")

?>