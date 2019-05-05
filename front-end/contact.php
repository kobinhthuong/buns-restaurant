<!DOCTYPE html>
<html lang="en">
    <!-- Head section -->
    <?php include 'layouts/header/head.php'; ?>
    <?php include 'layouts/header/header.php'; ?>
    <body>
        <!-- ================ Contact Section Start ================= -->
        <section class="section-margin">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Get in Touch</h2>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-contact contact_form" action="#" method="post" id="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm">Send Message</button>
                                </div>
                            </form>


                        </div>

                        <div class="col-lg-4">
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                    <h3>Hanoi, Vietnam.</h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                <div class="media-body">
                                    <p>Mon to Fri 9am to 6pm</p>
                                    <p>Address: 19 Phan Chu Trinh, Quận Hoàn Kiếm, Hà Nội, Việt Nam </p> 
                                    <p>Phone: (84-24) 3824 0926 - Hotline: (84) 916 193 883</p> 
                                    <p>Email: BunsRestaurant@gmail.com</p>  
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
        <!-- ================ contact section end ================= -->

        <!-- ================ start footer Area ================= -->
        <?php include ('layouts/footer/footer.php'); ?>
        <!-- ================ End footer Area ================= -->

        <!-- JS -->
        <?php include 'layouts/js/js.php'; ?>
    </body>
</html>