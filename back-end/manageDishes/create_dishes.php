<!DOCTYPE html>
<?php
$db = mysqli_connect("localhost", "root", "", "database_structure");
session_start();

if (isset($_POST['submit'])) {
    add_dish();
}

function add_dish() {
    global $db;
    $dish_name = $_POST['dish_name'];
    $author_name = $_POST['author'];
    $errors = array();

    // check if dish name is filled
    if (empty($dish_name)) {
        array_push($errors, 'Dish name is required');
        die("Dish name is required");
    }
    
    if (ctype_space($dish_name)) {
        die("Name includes space, please enter again");
    }
    // get author id if author name which has just been entered exists
    $get_author_id = mysqli_query($db, "SELECT author_id from author WHERE name = '$author_name'");
    $author_id_result = mysqli_fetch_array($get_author_id);
    $author_id = $author_id_result['author_id'];

    // get dish name if it's already existed and belonged to the above author
    $get_dish_name = mysqli_query($db, "SELECT name from dishs WHERE author_id = '$author_id' AND name = '$dish_name'");

    if (mysqli_num_rows($get_dish_name) != 0) {
        echo "Dish has existed!";
    } else {
        mysqli_query($db, "INSERT INTO dishs(author_id, name) VALUES ('$author_id','$dish_name')"); // add dish
        echo "Add dish sucessfully!";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8"
              <title><h3>Add Dish</h3></title>
    </head>
    <body>
        <form action="add_dish.php" method="POST">
            Dish name:
            <div>
                <input type="text" name="dish_name" value="">
            </div>
            Author name:
            <select name="author">
                <?php
                $get_author_name = mysqli_query($db, "SELECT name FROM author");
                while ($row = $get_author_name->fetch_assoc()) {
                    echo "<option value=" . $row['name'] . ">" . $row['name'] . "</option>";
                }
                ?>
            </select>
            <h6>
                <div>
                    <button type="submit" name="submit">Add</button>
                </div>
            </h6>
        </form>
    </body>
</html>
