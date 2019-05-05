<!DOCTYPE html>
<html lang="en">
    <!-- Head section -->
    <?php include 'layouts/header/head.php'; ?>
    <body>
        <!--================ Header Menu Area start =================-->
        <?php include 'layouts/header/header.php'; ?>
        <!--================Header Menu Area =================-->

        <!--================Feedback section start =================-->  
        <section class="section-margin">
            <div class="container">
                <div class="section-intro mb-75px">
                    <h4 class="intro-title">Customers Feedback</h4>
                    <h2>Famous chefs remarks</h2>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="chef-card">
<!--                            <img class="card-img rounded-0" src="img/home/chef-1.png" alt="">-->
                            <img src="img/home/chef-1.png" alt="" style="width:400px;height:400px;"> 
                            </br>
                            </br>
                            <h4>Gordon Ramsay</h4>
                            </br>
                            <p>"We had a very pleasant experience in restaurant. 
                                Staff was very courteous and understood how to deal with customers very well"</p>                          
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="chef-card">
                            <img class="card-img rounded-0" src="img/home/chef-2.png" alt="" style="width:400px;height:400px;">
                            </br>
                            </br>
                            <h4>Joe Bastianich</h4>
                            </br>
                            <p>"I loved the place, location food atmosphere and most importantly the wonderful staff. </br>
                                We are a family of 6 and had breakfast for 5 days in row and honestly i had nothing but good food and great services."</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="chef-card">
                            <img class="card-img rounded-0" src="img/home/chef-3.png" alt="" style="width:400px;height:400px;">
                            </br>
                            </br>
                            <h4>Graham Elliot</h4>
                            </br>
                            <p>"I loved the place, location food atmosphere and most importantly the wonderful staff. </br>
                                We are a family of 6 and had breakfast for 5 days in row and honestly i had nothing but good food and great services."</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Chef section end =================-->  

        <!-- ================ start footer Area ================= -->
        <?php include ('layouts/footer/footer.php'); ?>
        <!-- ================ End footer Area ================= -->

        <!-- JS -->
        <?php include 'layouts/js/js.php'; ?>
    </body>
</html>