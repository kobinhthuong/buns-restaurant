<?php
include("../config.php");
include '../../upload.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$query = mysqli_query($con, "SELECT * FROM posts WHERE id = $id");
$result = mysqli_fetch_array($query);
$post_photo = $result['photo'];

delete($post_photo);

$delete = mysqli_query($con, "DELETE FROM posts WHERE id = $id");
header("Location: view.php")

?>

<html>
    <head>
        <meta charset="UTF-8"
              <title><h3>Delete Dish</h3></title>
    </head>
    <body>
        <form action="delete.php" method="POST">
            <h4>Please enter dish's name that you want to delete</h4>
            Dish name:
            <div>
                <input type="text" name="name" value="">
            </div>
            <h6>
            <div>
                <button type="submit" name="submit">Delete</button>
            </div>
            </h6>
        </form>
    </body>
</html>

