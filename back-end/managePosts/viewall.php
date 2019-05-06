<?php
include '../config.php';
$sql = "select * from posts order by id desc";
$run = mysqli_query($con, $sql);
?>
<html>
<!--Header-->
    <?php include ('../layouts/header/header.php'); ?>
<!--Navigation -->
    <?php include ('../layouts/sidebar/navbar.php'); ?>
    <body> 
        <div id="page-wrapper">
            <div class="col-md-12 graphs">
                <div class="xs">
                    <h3>Posts Table</h3>
                    <div class="page-header">
                        <div class="page-name">
                            <ol class="">
                                <a href="add.php"><button class="button1">Add News</button></a>
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
<!--                                <tr class="active">
                                    <th scope="row">1</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>
                                        <a href="edit.php" target="_blank">Edit</a> </br>
                                        <a href="delete.php" target="_blank">Delete</a>
                                    </td>
                                </tr>-->
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

                                    </tr>
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
<!--<table width="100%" border="1">
    <tr>
        <td>id</td>
        <td>Category_id</td>
        <td>Title</td>
        <td>Summary</td>
        <td>Content</td>
        <td>Photo</td>
        <td>Is_shown</td>
        <td colspan="2"><div align="center">Action</div></td>
    </tr>
    //<?php
////    $id=0; why do u set this id as 0?
//    while ($dong = mysqli_fetch_array($run)) {
//        
?>
        <tr>
            <td>//<?php echo $dong['id'] ?></td>
            <td>//<?php echo $dong['category_id'] ?></td>
            <td>//<?php echo $dong['title'] ?></td>
            <td>//<?php // echo $dong['summary']      ?></td>
            <td>//<?php // echo $dong['content']      ?></td>
            <td><img src="back-end/managePosts/uploads///<?php echo $dong['hinhanh'] ?>" width="60px" height="60px"></td>
            <td>//<?php echo $dong['is_shown'] ?></td>
            <td><a href ="index.php?quanli=managePosts&ac=edit&id=//<?php echo $dong['id'] ?>" >Edit</a></td>
            <td><a href="back-end/managePosts/handling.php&id=//<?php echo $dong['id'] ?>">Delete</a></td>
        </tr>
        //<?php
//    }
//    
?>
</table>-->

