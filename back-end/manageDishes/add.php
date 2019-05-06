<?php
include '../config.php';
include '../../upload.php';

$sql = "select * from dishes order by id desc" or die();
$run = mysqli_query($con, $sql);
$error = array();

if (isset($_POST['button'])) {
    $dish_name = $_POST['dish_name'];
    $dish_des = $_POST['dish_des'];
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    $photo_path = "uploads/dishes/" . $photo_name;

    if (!empty($dish_name) && !empty($dish_des) && !empty($photo_path)) {
        upload($photo_tmp, $photo_path);
        $insert_dish = "INSERT INTO `dishes`(`name`, `photo`, `description`) VALUES ('$dish_name','$photo_path','$dish_des')";
        $query = mysqli_query($con, $insert_dish);
        echo "Sucess";
        header("Location: view.php");
    } else {
        array_push($error, "Dish name, dish description and photo must be filled!");
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
                    <h5 style="color: red; te"><?php if (count($error) != 0) { echo $error[0]; }?></h5>
                    <form action="" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <input placeholder="Dish name" type="text" class="form-control" name="dish_name" >
                        </div>
                            <div class="form-group">
                            <input  placeholder="Dish description" type="text" class="form-control" name="dish_des" >
                            </div>
                            <div class="form-group">
                            <input placeholder="Photo" type="file" class="form-control" name="photo">
                            </div>
                        <div>
                            
                            
                            <button type="submit" class="btn btn-primary" name="button">Add</button>
                        </div>

                    </form>
                </div>
            </div>
            <?php include ('../layouts/footer/footer.php'); ?>
        </div>
    </body>
</html>