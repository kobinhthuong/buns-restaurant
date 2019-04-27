
<?php
$db = mysqli_connect("localhost", "root", "", "buns");

if (isset($_POST['submit'])){
    delete_dish();
}

function delete_dish(){
    global $db; 
    $name = $_POST['name'];
    $errors = array();
    
    $get_dish = mysqli_query($db, "SELECT id from dishes WHERE name = '$name'");
    $id_result = mysqli_fetch_all($get_dish);
    $id = $id_result['id'];
    mysqli_query($db, "DELETE FROM dishes WHERE id = '$id';");
    echo "Delete dish successfully!";
    
}
?>
<html>
    <head>
        <meta charset="UTF-8"
              <title><h3>Delete Dish</h3></title>
    </head>
    <body>
        <form action="delete_manga.php" method="POST">
            <h4>Please enter dish that you want to delete</h4>
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

<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<?php
    $id=$_GET['id'];
 
    $tv="select * from san_pham where id='$id' ";
    $tv_1=mysql_query($tv);
    $tv_2=mysql_fetch_array($tv_1);

    $link_hinh="../hinh_anh/san_pham/".$tv_2['hinh_anh'];
    if(is_file($link_hinh)) 
    {
        unlink($link_hinh);
    }
 
    $tv="DELETE FROM san_pham WHERE id = $id ";
    mysql_query($tv);
?>