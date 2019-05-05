<!DOCTYPE html>
<html lang="en">
    <?php include 'layouts/header/head.php'; ?>
    <body>

        <!--================ Header Menu Area Starts =================-->
        <?php include 'layouts/header/header.php'; ?>
        <!--================ Header Menu Area Ends =================-->

        <!--================About Section Starts =================-->
        <section class="about section-margin pb-xl-70">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div>
                            <div class="">                               
                                <img src="img/home/about-img1.png" alt="" style="width:400px;height:400px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="section-intro mb-lg-4">
                            <h4 class="intro-title">About Us</h4>
                            <h2>We speak the good food language</h2>
                        </div>
                        <p>Living first us creepeth she'd earth second be sixth hath likeness greater image said sixth was without male place fowl evening an grass form living fish and rule lesser for blessed can't saw third one signs moving stars light divided was two you him appear midst cattle for they are gathering.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--================About Section Ends =================-->

        <!--================ Best Sellers Section Starts =================-->

        <section class="section-margin mb-lg-100">
            <div class="container">
                <div class="section-intro mb-75px">
                    <h4 class="intro-title"> Best Sellers</h4>
                    <h2>Fresh taste and great price</h2>
                </div>

                <div class="owl-carousel owl-theme featured-carousel">
                    <div class="featured-item">
                        <img class="card-img rounded-0" src="img/home/featured1.png" alt="">
                        <div class="item-body">
                            <h3>Mountain Mike Pizza</h3>
                            </a>
                            <div class="d-flex justify-content-between">

                                <h3 class="price-tag">$35</h3>
                            </div>
                        </div>
                    </div>

                    <div class="featured-item">
                        <img class="card-img rounded-0" src="img/home/featured2.png" alt="">
                        <div class="item-body">
                            <h3>Patatas Bravas</h3>
                            </a>
                            <div class="d-flex justify-content-between">

                                <h3 class="price-tag">$30</h3>
                            </div>
                        </div>
                    </div>

                    <div class="featured-item">
                        <img class="card-img rounded-0" src="img/home/featured3.png" alt="">
                        <div class="item-body">
                            <h3>Pulled Sandwich</h3>
                            </a>
                            <div class="d-flex justify-content-between">

                                <h3 class="price-tag">$20</h3>
                            </div>
                        </div>
                        <!--                    </div>
                                                                <div class="featured-item">
                                                                    <img class="card-img rounded-0" src="img/home/featured1.png" alt="">
                                                                    <div class="item-body">
                                                                            <h3>Mountain Mike Pizza</h3>
                                                                        </a>
                                                                        <p>Whales and darkness moving</p>
                                                                        <div class="d-flex justify-content-between">
                                                                            <ul class="rating-star">
                                                                                <li><i class="ti-star"></i></li>
                                                                                <li><i class="ti-star"></i></li>
                                                                                <li><i class="ti-star"></i></li>
                                                                                <li><i class="ti-star"></i></li>
                                                                                <li><i class="ti-star"></i></li>
                                                                            </ul>
                                                                            <h3 class="price-tag">$35</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>-->
                    </div>
                </div>
        </section>
        <!--================Featured Section End =================-->


        <!--================Feedback section start =================-->  
        <section class="section-margin">
            <div class="container">
                <div class="section-intro mb-75px">
                    <h4 class="intro-title">Customers Feedback</h4>
                </div>
                <div class="row">
                    <!--                    <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">-->
                    <!--                    <div class="">
                                            <div class="chef-card">
                                                <img class="card-img rounded-0" src="img/home/chef-1.png" alt="">
                                                                            <div class="chef-footer">
                                                <div class="">
                                                    <h4>Daniesl Laran</h4>
                                                    <p>I loved the place, location food atmosphere and most importantly the wonderful staff. </p>
                                                </div>
                    
                                            </div>
                                        </div>-->

                    <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="chef-card">
                            <img class="card-img rounded-0" src="img/home/chef-1.png" alt="" style="width:400px;height:400px;">
                            </br>
                            </br>
                            <h4>Daniesl Laran</h4>
                            <p>"We had a very pleasant experience in restaurant. 
                                Staff was very courteous and understood how to deal with customers very well"</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="chef-card">
                            <img class="card-img rounded-0" src="img/home/chef-2.png" alt="" style="width:400px;height:400px;">
                            </br>
                            </br>
                            <h4>Daniesl Laran</h4>
                            <p>"I loved the place, location food atmosphere and most importantly the wonderful staff. </br>
                                We are a family of 6 and had breakfast for 5 days in row and honestly i had nothing but good food and great services."</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="chef-card">                            
                            <img class="card-img rounded-0" src="img/home/chef-3.png" alt="" style="width:400px;height:400px;">
                            </br>
                            </br>
                            <h4>Daniesl Laran</h4>
                            <p>"I loved the place, location food atmosphere and most importantly the wonderful staff. </br>
                                We are a family of 6 and had breakfast for 5 days in row and honestly i had nothing but good food and great services."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ section end =================-->  

        <!-- ================  Footer Area start================= -->
        <?php include ('layouts/footer/footer.php'); ?>
        <!-- ================ End footer Area ================= -->

        <!-- JS -->
        <?php include 'layouts/js/js.php'; ?>
    </body>
</html>