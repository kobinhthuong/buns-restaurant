
<!--header-->

 
<?php
include ('../layouts/header/header.php');
include '../config.php';
$sql ="select * from dishes order by id desc" or die ();
$run = mysqli_query($conn, $sql);

?>

<!--<!DOCTYPE HTML>-->
<html>
    <?php include ('../layouts/header/header.php');?> 
    <body>   
        <!-- Navigation -->
        <?php include ('../layouts/sidebar/navbar.php'); ?> 

        <div id="page-wrapper">
            <div class="col-md-12 graphs">
                <div class="xs">
                    <h3>Dishes Table</h3>
                    <div class="page-header">
                        <div class="page-name">
                            <ol class="text-right">
                                <a href="add.php" target="_blank">Add Dish</a> </br>

                            </ol>
                        </div>
                    </div>
                </div>
                <div class="bs-example4" data-example-id="contextual-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th colspan="2"><div align="center">Action</div></th>
                            </tr>
                            <?php
                            while ($close = mysqli_fetch_array($run)) {
                                ?>
                                <tr>
                                    <td><?php echo $close['id'] ?></td>
                                    <td><?php echo $close['name'] ?></td>
                                    <td><?php echo $close['discription'] ?></td>
                                    <td><img src="back-end/manageDishes/uploads/<?php echo $close['photo'] ?>" width="60px" height="60px"></td>
                                    <td align="center"><a href ="index.php?manage=manageDishes&ac=edit&id=<?php echo $close['id'] ?>" >Edit</a></td>
                                    <td align="center"><a href="back-end/manageDishes/handling.php&id=<?php echo $close['id'] ?>">Delete</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </thead>
                    </table>

<!--                        <tbody>
                            <tr class="active">
                                <th scope="row">1</th>
                                <td>Cream</td>
                                <td>19/04/30</td>
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
                    </table>-->
                </div>
            </div>
            <?php include ('../layouts/footer/footer.php'); ?>
            <!-- /#page-wrapper -->
        </div>
        <!--                footer-->
                    
        <!-- /#wrapper -->
        <!-- Nav CSS -->
        <link href="css/custom.css" rel="stylesheet">
        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
