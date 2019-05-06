<?php
include('../config.php');
include '../../upload.php';

$sql = "select * from dishes order by id desc" or die();
$run = mysqli_query($con, $sql);

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $content = $_POST['content'];
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
//    define('SITE_ROOT', __DIR__);
    $photo_path = "uploads/posts/" . $photo_name;

    if (isset($title, $summary, $content, $photo_path)) {
//        die("stop");
//        move_uploaded_file($photo_tmp, $photo_path);
        upload($photo_tmp, $photo_path);
//        die("stop");
        $insert_dish = "INSERT INTO `posts`(`title`, `summary`, `content`, `photo`) VALUES ('$title','$summary','$content', '$photo_path')";
//        die('stop');
        $query = mysqli_query($con, $insert_dish);
        echo "Sucess";
        header("Location: view.php");
    }
}
?>
<!DOCTYPE HTML>
<html>
    <!--header-->
    <?php include ('../layouts/header/header.php'); ?> 
    <!-- Navigation -->
    <?php include ('../layouts/sidebar/navbar.php'); ?>
    <body>
        <div id="page-wrapper">
            <div class="col-md-12 graphs">
                <div class="xs">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label>Summary</label>
                            <input type="text" class="form-control" name="summary">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <button type="submit" class="btn btn-primary" name="add">Add</button>
                    </form>
                </div>
            </div>
            <?php include ('../layouts/footer/footer.php'); ?>
        </div>
    </body>
</html>