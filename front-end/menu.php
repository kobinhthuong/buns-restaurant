<?php
include 'config.php';
$con = mysqli_connect("$host", "$username", "$password", "$database") or die("Server Error!");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query_dish = mysqli_query($con, "SELECT `name`, `photo`, `description` FROM `dishes`");
$dish_list = mysqli_fetch_all($query_dish);
?>
<html>
    <!-- Head section -->
    <?php include 'layouts/header/head.php'; ?>
    <body>
        <!--================ Header Menu Area start =================-->
        <?php include 'layouts/header/header.php'; ?>
        <!--================Header Menu Area end =================-->
        
        <!--================Food menu section start =================-->  
        <section class="section-margin">
            <div class="container">
                <div class="section-intro mb-75px">
                    <h4 class="intro-title">Food Menu</h4>
                    <h2>Delicious food</h2>
                </div>
                <div class="row">
                    <?php
                    foreach ($dish_list as $dish) {
                        $dish_name = $dish[0];
                        $dish_image = $dish[1];
                        $dish_des = $dish[2];
                        ?>
                        <div class="col-lg-6">
                            <div class="media align-items-center food-card">
                                <img class="mr-3 mr-sm-4" src="<?php echo $dish_image; ?>" alt="">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between food-card-title">
                                        <h4><?php echo $dish_name; ?></h4>
                                    </div>
                                    <p><?php echo $dish_des; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--================Food menu section end =================-->

        <!-- ================ start footer Area ================= -->
        <?php include ('layouts/footer/footer.php'); ?>
        <!-- ================ End footer Area ================= -->
        
        <!-- JS -->
        <?php include 'layouts/js/js.php'; ?>
    </body>
</html>
