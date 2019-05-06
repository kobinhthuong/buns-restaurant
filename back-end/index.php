<?php
include 'config.php';

$query_dish = mysqli_query($con, "SELECT * FROM dishes order by id desc");
$result_dish = mysqli_fetch_all($query_dish);

$query_post = mysqli_query($con, "SELECT * FROM posts order by id desc");
$result_post = mysqli_fetch_all($query_post);

//echo $result_post[0][1];
?>
<!DOCTYPE HTML>
<html>
    <!-- header-->
    <head>
        <title>BUNs Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="css/lines.css" rel='stylesheet' type='text/css' />
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Nav CSS -->
        <link href="css/custom.css" rel="stylesheet">
        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- Graph JavaScript -->
        <script src="js/d3.v3.js"></script>
        <script src="js/rickshaw.js"></script>
    </head>    
    <!--end head-->

    <!-- Navigation --> 
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <a class="navbar-brand" href="index.php">BUNs Admin Panel</a>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <!--dashboard--> 
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard nav_icon"></i>Dashboard</a>
                    </li>
                    <!--Dishes-->
                    <li>
                        <a href="manageDishes/view.php"><i class="fa fa-cutlery nav_icon" ></i>Manage Dishes</a>
                    </li>
                    <!--Posts Management-->
                    <li>
                        <a href="managePosts/view.php"><i class="fa fa-laptop nav_icon"></i>Manage Posts</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- End Navigation --> 

    <!--body-->
    <body>
        <div id="wrapper">
            <div id="page-wrapper">
                <div class="graphs">
                    <div class="col_6">
                        <div class="col-md-6 span_8">
                            <div class="activity_box">
                                <h3 style="padding-top: 10px;">New dishes</h3>
                                <div class="scrollbar" id="style-2">
                                    <?php for ($i = 0; $i < 4; $i++) { ?>
                                        <div class="activity-row">                                                                       <div class="col-xs-8 activity-desc">
                                                <h5><a href="manageDishes/edit.php?id=<?php echo $result_dish[$i][0]; ?>"><?php echo $result_dish[$i][1]; ?></a></h5>
                                                <p><?php echo $result_dish[$i][3]; ?></p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    <?php } ?>                                        
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 span_8">
                            <div class="activity_box">
                                <h3 style="padding-top: 10px;">New posts</h3>
                                <div class="scrollbar" id="style-2">
                                    <?php for ($i = 0; $i < 4; $i++) { ?>
                                        <div class="activity-row">
                                            <div class="col-xs-8 activity-desc">
                                                <h5><a href="managePosts/edit.php?id=<?php echo $result_post[$i][0]; ?>"><?php echo $result_post[$i][1]; ?></a></h5>
                                                <p><?php echo $result_post[$i][2]; ?></p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    <?php } ?>                                            
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>            
                <!--end body-->
                <!--footer-->
                <div class="">
                    <p align="center">Copyright &copy; 2019 Buns. All Rights Reserved | Design by Supermen </p>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
