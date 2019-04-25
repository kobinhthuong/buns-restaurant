<!--header-->
<?php include ('../layouts/header/header.php'); ?>     

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
                    <?php include ('../layouts/footer/footer.php'); ?> 
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
