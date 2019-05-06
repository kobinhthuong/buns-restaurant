<?php
include '../config.php';
$sql = "select * from posts order by id desc";
$run = mysqli_query($con, $sql);
?>
<html>
<!--    header-->
    <?php include ('../layouts/header/header.php'); ?>
<!--     Navigation -->
    <?php include ('../layouts/sidebar/navbar.php'); ?>
    <body> 
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
                    <div class="bs-example4" data-example-id="contextual-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Summary</th>
                                    <th>Photo</th>
                                    <th colspan="2"><div align="center">Action</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($dong = mysqli_fetch_array($run)) {
                                 ?>
                                    <tr class="active">
                                        <!--<th scope="row">1</th>-->
                                        <td><?php echo $dong['id'] ?></td>
                                        <td><?php echo $dong['title'] ?></td>
                                        <td><?php echo $dong['summary']   ?></td>
                                        <td><img src="uploads/posts/<?php echo $dong['photo'] ?>" width="60px" height="60px"></td>
                                        <td align="center"><a href ="edit.php?id=<?php echo $dong['id']?>" target="_blank" >Edit</a></td>
                                        <td align="center"><a href="edit.php?id=<?php echo $dong['id']?>" target="_blank">Delete</a></td>
                  
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!--footer-->
                    <?php include ('../layouts/footer/footer.php'); ?> 
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- Nav CSS -->
        <link href="../css/custom.css" rel="stylesheet">
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>
        <script src="../js/custom.js"></script>
    </body>
</html>

