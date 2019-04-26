<!--header-->
<?php include ('layouts/header/header.php'); ?>     
<!DOCTYPE html>
<?php
$db = mysqli_connect("localhost", "root", "", "database_structure");

if (isset($_POST['submit'])){
    delete_manga();
}

function delete_manga(){
    global $db; 
    $manga_name = $_POST['manga_name'];
    $author_name = $_POST['author_name'];
    $errors = array();
    
    $get_manga = mysqli_query($db, "SELECT manga_id from mangas WHERE name = '$manga_name'");
    $manga_id_result = mysqli_fetch_all($get_manga);
    $manga_id = $manga_id_result['manga_id'];
    mysqli_query($db, "DELETE FROM mangas WHERE manga_id = '$manga_id';");
    echo "Delete manga successfully!";
    
}
?>
<html>
    <head>
        <meta charset="UTF-8"
              <title><h3>Delete Manga</h3></title>
    </head>
    <body>
        <form action="delete_manga.php" method="POST">
            <h4>Please enter manga that you want to delete</h4>
            Manga name:
            <div>
                <input type="text" name="manga_name" value="">
            </div>
            Author name:
            <div>
                <input type="text" name="author_name" value="">
            </div>
            <h6>
            <div>
                <button type="submit" name="submit">Delete</button>
            </div>
            </h6>
        </form>
    </body>
</html>


<!DOCTYPE HTML>
<html>
    <body>   
        <!-- Navigation -->
        <?php include ('../layouts/sidebar/navbar.php'); ?> 

        <div id="page-wrapper">
            <div class="col-md-12 graphs">
                <div class="xs">
                    <h3>Dishes Table</h3>
                    <div class="bs-example4" data-example-id="contextual-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <th scope="row">1</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>
                                        <a href="edit.php" target="_blank">Edit</a> </br>
                                        <a href="delete.php" target="_blank">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>
                                        <a href="edit.php" target="_blank">Edit</a> </br>
                                        <a href="delete.php" target="_blank">Delete</a>
                                    </td>
                                </tr>
                                <tr class="success">
                                    <th scope="row">3</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>
                                        <a href="edit.php" target="_blank">Edit</a> </br>
                                        <a href="delete.php" target="_blank">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>
                                        <a href="edit.php" target="_blank">Edit</a> </br>
                                        <a href="delete.php" target="_blank">Delete</a>
                                    </td>
                                </tr>
                                <tr class="info">
                                    <th scope="row">5</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>
                                        <a href="edit.php" target="_blank">Edit</a> </br>
                                        <a href="delete.php" target="_blank">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <!--                footer-->
                    <?php include ('layouts/footer/footer.php'); ?> 
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- Nav CSS -->
        <link href="css/custom.css" rel="stylesheet">
        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
