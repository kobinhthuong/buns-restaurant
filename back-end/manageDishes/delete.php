
<?php
$db = mysqli_connect("localhost", "root", "", "buns");

if (isset($_POST['submit'])){
    delete_dish();
}

function delete_dish(){
    global $db; 
    $dish_name = $_POST['name'];
    $get_dish = mysqli_query($db, "SELECT id from dishes WHERE name = '$dish_name'");
    $dish_id_result = mysqli_fetch_all($get_dish);
    $dish_id = $dish_id_result['dish_id'];
    $link_photo="../photo/dishes/".$a_2['photo'];
    if(is_file($link_photo)) 
    {
        unlink($link_photo);
    }
    mysqli_query($db, "DELETE FROM dishs WHERE dish_id = '$dish_id';");
    echo "Delete dish successfully!";
    
}
?>

<html>
    <head>
        <meta charset="UTF-8"
              <title><h3>Delete Dish</h3></title>
    </head>
    <body>
        <form action="delete_dish.php" method="POST">
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

