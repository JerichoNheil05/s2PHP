<?php 
    include 'config.php';

    //fetch all articles from the datbase
    $query = "SELECT * FROM studenttable";
    $result = mysqli_query($conn, $query);

    //display articles
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>" .$row['title']."</h2>";
        echo "<p>" .$row['content']."</p>";
        echo "<a href = 'edit.php?id=" .$row['id']."'>EDIT</a> | ";
        echo "<a href = 'delete.php?id=" .$row['id']."'>DELETE</a> | ";
        echo "<hr>";
    }

?>

<a href = "add.php"> Add new ARTICLE</a><br/><br/>
