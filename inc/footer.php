<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom50">
                    <div class="title">
                        <h3>About <?php $settings->siteTitle ?></h3>
                        <span class="border"></span>
                    </div>
                    <div class="our-info">
                        <p>The relentless service of <?= $settings->siteTitle  ?> in the past years has taken health care to the most modern levels in the region catering to urban & rural.</p>
                        <p class="mar-top">A Health Care Provider of Western Approach, <?= $settings->siteTitle  ?> is the most trusted multispecialty hospital.</p>
                        <a href="about">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom50">
                    <div class="title">
                        <h3>Usefull Links</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="usefull-links fl-lft">
                        <li><a href="about">About Us</a></li>
                        <li><a href="<?= $baseurl ?>#awards">Awards</a></li>
                        <li><a href="about#doctors">Consultants</a></li>
                        <li><a href="programs">Programs</a></li>
                        <li><a href="research">Research</a></li>
                        <li><a href="about#faq">FAQ’s</a></li>
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                    <ul class="usefull-links">
                        <li><a href="cardiac-clinic">Cardiac Clinic</a></li>
                        <li><a href="psychiatry">Psychiatry</a></li>
                        <li><a href="gynecology">Gynecology</a></li>
                        <li><a href="neurology">Neurology</a></li>
                        <li><a href="urology">Urology</a></li>
                        <li><a href="ophthalmology">Ophthalmology</a></li>
                        <li><a href="pediatrics">Pediatrics</a></li>
                        <li><a href="vascular-center">Vascular Center</a></li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mar-bottom">
                    <div class="title">
                        <h3>Contact Details</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-pin"></span>
                            </div>
                            <div class="text-holder">
                                <h5><?= $settings->address_a ?>,<br> <?= $settings->address_b ?></h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-interface"></span>
                            </div>
                            <div class="text-holder">
                                <h5><?= $settings->email; ?></h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h5><?= $settings->phoneNumber; ?></h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="text-holder">
                                <h5>Mon-Sat: 9am to 6pm</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Start single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget clearfix">
                    <div class="title">
                        <h3>Make an Appointment</h3>
                        <span class="border"></span>
                    </div>
                    <form class="appointment-form" action="#">
                        <div class="input-box">
                            <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                            <div class="icon-box">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <input type="email" name="form_email" value="" placeholder="Your Email" required="">
                            <div class="icon-box">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <textarea name="form_message" placeholder="Your Message.." required="" aria-required="true"></textarea>
                        </div>
                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>   
<!--End footer area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright-text">
                    <p><?= $settings->siteTitle; ?> &copy; <?= $year; ?>. All Rights Reserved, Powered by <a href="<?= $baseurl ?>"><?= $settings->siteTitle ?></a></p> 
                </div>
            </div>
            <div class="col-md-4">
                <ul class="footer-social-links">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>