<?php
include "config.php";
 
$id = $_GET['id'];
 
$query = "DELETE FROM studenttable WHERE id = $id";
mysqli_query($conn, $query);
 
header("Location: index.php");
exit();
 
?>