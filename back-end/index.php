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
                <div class="col_3">
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-laptop
                               icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>2</strong></h5>
                                <span>New Posts</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-users  icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>1019</strong></h5>
                                <span>New Visitors</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-picture-o  icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>5</strong></h5>
                                <span>New Images</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-cutlery  icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>12</strong></h5>
                                <span>New dishes</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col_1">

                    <div class="col-md-4 span_8">
                        <div class="activity_box">
                            <div class="scrollbar" id="style-2">
                                <?php for ($i = 0; $i < 2; $i++) {?>
                                <div class="activity-row">                                                                       <div class="col-xs-8 activity-desc">
                                        <h5><?php echo $result_post[$i][1];?> </h5>
                                        <p>Students Only</p>
                                        <h6>8:03</h6>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <?php } ?>
                                <div class="activity-row">                                                                       <div class="col-xs-8 activity-desc">
                                        <h5>Grand Opening</h5>
                                        <p>Discount 50% for loyal members </p>
                                        <h6>10:03</h6>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row">                                                                       <div class="col-xs-8 activity-desc">
                                        <h5>Grand Opening</h5>
                                        <p>Discount 50% for loyal members </p>
                                        <h6>10:03</h6>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                
                                                                                           
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 stats-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">New Dishes</h4>
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li>Roasted Marrow<div class="text-success pull-right">12<i ></i></div></li>
                                <li>Roasted Marrow<div class="text-success pull-right">15<i ></i></div></li>
                                <li>Roasted Marrow<div class="text-success pull-right">18<i ></i></div></li>
                                <li>Roasted Marrow<div class="text-danger pull-right">17<i ></i></div></li>
                                <li>Roasted Marrow<div class="text-success pull-right">18<i ></i></div></li>
                                <li>Roasted Marrow<div class="text-danger pull-right">17<i ></i></div></li>
                                
                            </ul>
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
</div>
<!-- /#wrapper -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
