
<?php
include '../config.php';
include '../../upload.php';
?>
//<a href="../../uploads/">aaa</a>
<form action="back-end/manageDishes/handling.php" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
        <html>        
            <head>
                <meta charset="UTF-8"
            <td colspan="2" ><div style="color:blue;font-size:20px" align="center">Add Dish</div><br><br> </td>
            <form action="" method="post" enctype="multipart/form-data" >
                <table width="990px" >
                    <tr>
                        <td width="150px" >Name : </td>
                        <td width="840px">
                            <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="name" value="" >
                        </td>
                    </tr>
                    <tr>
                        <td >Photo : </td>
                        <td>
                            <input type="file" name="photo" >
                        </td>
                    </tr>

<?php if (isset($_POST['button'])) {
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
        $insert_dish = "INSERT INTO `dishes`(`name`, `photo`, `discription`) VALUES ('$dish_name','$photo_path','$dish_des')";
//        die('stop');
        $query = mysqli_query($con, $insert_dish);
        echo "Sucess";
//        header("Location: dishes.php");
    } else {
    }
}
?>
<!DOCTYPE html>
<html lang="en">
        <?php include '../layouts/header/header.php' ?>
    <body>
<?php include '../layouts/sidebar/navbar.php' ?>
        <div id="page-wrapper">
            <div class="col-md-12 graphs">
                <div class="xs">
                    <!--                                <form action="back-end/manageDishes/handling.php" method="post" enctype="multipart/form-data">
                                                        <table width="100%" border="1">
                                                            <html>        
                                                                <head>
                                                                    <meta charset="UTF-8"
                                                                <td colspan="2" ><div style="color:blue;font-size:20px" align="center">Add Dish</div><br><br> </td>-->
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
                      <!--                        <table width="990px" >
                                                  <tr>
                                                      <td width="150px">Name:</td>
                                                      <td width="840px">
                                                          <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="name" value="" >
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td >Photo : </td>
                                                      <td>
                                                          <input type="file" name="photo" >
                                                      </td>
                                                  </tr>
                      
                                                  <tr>
                                                      <td valign="top" >Description : </td>
                                                      <td>
                                                          <script type="text/javascript">
                                                              tinymce.init({
                                                                  selector: '#description',
                                                                  theme: 'modern',
                                                                  width: 800,
                                                                  height: 400,
                                                                  plugins: [
                                                                      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                                                                      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                                                      'save table contextmenu directionality emoticons template paste textcolor jbimages'
                                                                  ],
                                                                  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
                                                                  relative_urls: false
                                                              });
                      
                                                          </script>  
                                                          <textarea id="description" name="description" ></textarea>  
                      
                                                      </td>
                                                  </tr>
                                                  <tr>                     
                                                      <td>
                                                          <br>
                                                          <input type="submit" name="add_dish" value="OK" style="width:100px;height:30px;font-size:15px" >
                                                      </td>
                                                  </tr>
                                              </table>-->
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>