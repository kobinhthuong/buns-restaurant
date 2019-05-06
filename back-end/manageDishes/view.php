<?php
include '../config.php';
$sql = "select * from dishes order by id desc" or die();
$run = mysqli_query($con, $sql);
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
                    <h3>Dishes Table</h3>
                    <div class="page-header">
                        <div class="page-name">
                            <ol class="text-left">
                               <a href="add.php"><button class="button1">Add new dishes</button></a>
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
                                    <td><?php echo $close['description'] ?></td>
                                    <td><img src="../../<?php echo $close['photo']; ?>" width="60px" height="60px"></td>
                                    <td align="center"><a href ="edit.php?id=<?php echo $close['id']; ?>">Edit</a></td>
                                    <td align="center"><a href="delete.php?id=<?php echo $close['id']; ?>">Delete</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </thead>
                    </table>
                </div>
            </div>
            <!--footer-->
            <?php include ('../layouts/footer/footer.php'); ?>
        </div>
        <link href="css/custom.css" rel="stylesheet">
        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
