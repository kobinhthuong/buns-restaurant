<?php
include("../config.php");
include("../../upload.php");

$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$run = mysqli_query($con, "SELECT * FROM posts WHERE id=$id");
$result = mysqli_fetch_array($run);
$error = array();

if (isset($_POST['edit'])) {
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $content = $_POST['content'];
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    $photo_path = "uploads/posts/" . $photo_name;

    if (!empty($title) && !empty($summary) && !empty($content) && !empty($photo_path)) {
        upload($photo_tmp, $photo_path);

        $sql = "update posts set title='$title',summary='$summary',content='$content',photo='$photo_path' where id =$id ";
        $run = mysqli_query($con, $sql);
        header("Location: view.php");
    } else {
        array_push($error, "Dish name, dish description and photo must be filled!");
    }
}
?>

<!DOCTYPE HTML>
<html>
    <!--Header-->
    <?php include ('../layouts/header/header.php'); ?>
    <!--Navigation -->
    <?php include ('../layouts/sidebar/navbar.php'); ?>
    <body> 
        <div id="page-wrapper">
            <div class="col-md-12 graphs">
                <div class="xs">
                    <h3>Edit post</h3>
                    <h5 style="color: red; te"><?php if (count($error) != 0) { echo $error[0]; }?></h5>
                    <div class="page-header">
                        <div class="page-name">
                            <ol class="text-left">
                                <a href="add.php" target="_blank">Add post</a> </br>
                            </ol>
                        </div>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="<?php echo $result['title'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Summary</label>
                            <input type="text" class="form-control" name="summary" placeholder="<?php echo $result['summary'];?>">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea type="text" class="form-control" name="content" placeholder="<?php echo $result['content'];?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <div><img src="../../<?php echo $result['photo'];?>" style="width: 200px; height: 200px;"></div>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>