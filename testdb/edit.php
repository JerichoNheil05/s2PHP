<?php
    include "config.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $query = "UPDATE studenttable SET title = '$title', content = '$content' WHERE id = '$id'";

        mysqli_query($conn, $query);

        header("Location: index.php");
        exit();
    }

    $id = $_GET['id'];

    $query = "SELECT * FROM studenttable WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $article = mysqli_fetch_assoc($result);

?>

<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
    <label>Title</label><br/>
    <input type="text" name="title" value="<?php echo $article['title']; ?>"><br/><br/>
    <label>Content</label><br/>
    <textarea name="content"><?php echo $article['content']; ?></textarea><br/><br/>
    <button type="submit">Update Article</button>
</form>