<?php

include("../config.php");
$sql = "select * from dishes where id ='$_GET[id]'";
$run = mysqli_query($conn, $sql);
$close = mysqli_fetch_array($run);
?>
<form method="post" enctype="multipart/form-data">
    <table width="100%" border="1"> 
        <tr>
            <td colspan="2" ><div style="color:blue;font-size:20px" align="center">Edit Dish</div><br><br> </td>
        </tr>
        <tr>
            <td width="150px" >Name : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" type="text" name="name" value="<?php echo $close['title'] ?>">
            </td>
        </tr>
        <tr>
            <td >Photo : </td>
            <td>
                <input type="file" name="photo"><img src="back-end/managePosts/uploads/<?php echo $close['photo'] ?>" width="60px" height="60px"/>
            </td>
        </tr>

        <tr>
            <td valign="top" >Description : </td>
            <td>
                <textarea id="description" name="description" ><?php echo $close['description'] ?></textarea>
            </td>
        </tr>        
<?php
//$sql = "select * from dishes where id ='$_GET[id]'";
//$run = mysqli_query($con, $sql);
//$close = mysqli_fetch_array($run);

include("../config.php");
include '../../upload.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$run = mysqli_query($con, "SELECT * FROM posts WHERE id=$id");
$dong = mysqli_fetch_array($run);

if (isset($_POST['edit'])) {
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
        $update_dish = "UPDATE dishes SET `name` = '$dish_name', `photo` = '$photo_path', `description` = '$dish_des' WHERE id = $id";
//        die('stop');
        $query = mysqli_query($con, $update_dish);
        echo "Sucess";
        header("Location: dishes.php");
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
                    <h3>Dishes Table</h3>
                    <div class="page-header">
                        <div class="page-name">
                            <ol class="text-left">
                                <a href="add.php" target="_blank">Add Dish</a> </br>
                            </ol>
                        </div>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <table width="100%" border="1">
                            <tr>
                                <td colspan="2"><div align="center">Edit Dish</div></td>
                            </tr>
                            <tr>
                                <td>Dish name</td>
                                <td><input type="text" name="dish_name" value="<?php echo $dong['name'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><input type="text" name="dish_des" value="<?php echo $dong['desription'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Photo</td>
                                <td><input type="file" name="photo"><img src="<?php echo $dong['photo'] ?>" width="60px" height="60px"/></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div align="center"> 
                                        <button name="edit">Edit</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
