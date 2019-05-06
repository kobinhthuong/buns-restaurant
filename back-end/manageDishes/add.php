<?php
include '../config.php';
include '../../upload.php';

$sql = "select * from dishes order by id desc" or die();
$run = mysqli_query($con, $sql);

if (isset($_POST['button'])) {
    $dish_name = $_POST['dish_name'];
    $dish_des = $_POST['dish_des'];
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
//    define('SITE_ROOT', __DIR__);
    $photo_path = "uploads/dishes/" . $photo_name;
//    $photo_path = SITE_ROOT . "uploads/dishes/" .$photo_name;

    if (isset($dish_name, $dish_des, $photo_name)) {
//        move_uploaded_file($photo_tmp, $photo_path);
        upload($photo_name, $photo_tmp, $photo_path);
        $insert_dish = "INSERT INTO `dishes`(`name`, `photo`, `description`) VALUES ('$dish_name','$photo_path','$dish_des')";
//        die('stop');
        $query = mysqli_query($con, $insert_dish);
        echo "Sucess";
//        header("Location: dishes.php");
    } else {
        
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
                    <h3>Add new Dish</h3>
                    <form action="" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label>Dish name</label>
                            <input type="text" class="form-control" name="dish_name">
                        </div>
                        <div class="form-group">
                            <label>Dish description</label>
                            <input type="text" class="form-control" name="dish_des">
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <button type="submit" class="btn btn-primary" name="button">Add</button>
                    </form>
                </div>
            </div>
            <?php include ('../layouts/footer/footer.php'); ?>
        </div>
    </body>
</html>