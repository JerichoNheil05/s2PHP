<?php 
    include "config.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $title = $_POST['title'];
        $content = $_POST['content'];

        //insert article
        $query = "INSERT INTO studenttable (title, content) VALUES ('$title', '$content')";

        mysqli_query($conn, $query);

        //Redirect to the homepage after adding
        header("Location:index.php");
        exit();

    }
?>

<form method="POST" action="">
    <label>Title</label><hr/>
    <input type="text" name="title"><br/><br/>
    <label>Content</label><br/>
    <textarea name="content"></textarea><br/><br/>
    <input type="Submit" value="Add Article">
</form>
