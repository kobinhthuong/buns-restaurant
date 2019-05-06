<?php
include("../config.php");
include("../../upload.php");

$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$query = mysqli_query($con, "SELECT * FROM dishes WHERE id = $id");
$result = mysqli_fetch_array($query);

if (isset($_POST['button'])) {
    $dish_name = $_POST['dish_name'];
    $dish_des = $_POST['dish_des'];
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
//    define('SITE_ROOT', __DIR__);
    $photo_path = "uploads/dishes/" . $photo_name;
//    $photo_path = SITE_ROOT . "uploads/dishes/" .$photo_name;

    if (isset($dish_name, $dish_des, $photo_path)) {
//        move_uploaded_file($photo_tmp, $photo_path);
        upload($photo_tmp, $photo_path);
        
        $update_dish = "UPDATE dishes SET `name` = '$dish_name', `photo` = '$photo_path', `description` = '$dish_des' WHERE id = $id";
//        die('stop');
        $query = mysqli_query($con, $update_dish);
        echo "Sucess";
        header("Location: view.php");
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
                    <h3>Edit dish</h3>
                    <div class="page-header">
                        <div class="page-name">
                            <ol class="text-left">
                                <a href="add.php" target="_blank">Add Dish</a> </br>
                            </ol>
                        </div>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Dish name</label>
                            <input type="text" class="form-control" name="dish_name" placeholder="<?php echo $result['name'];?>">
                        </div>
                        <div class="form-group">
                            <label>Dish description</label>
                            <input type="text" class="form-control" name="dish_des" placeholder="<?php echo $result['description'];?>">
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <div><img src="../../<?php echo $result['photo'];?>" style="width: 200px; height: 200px;"></div>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <button type="submit" class="btn btn-primary" name="button">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>