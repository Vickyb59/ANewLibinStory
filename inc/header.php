<!--Start top bar area-->
<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="top-left">
                    <p><span class="flaticon-phone"></span>24 hours emergency & ambulance service: <?= $settings->phoneNumber; ?></p> 
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="top-right clearfix">
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End top bar area-->  

<!--Start header area--> 
<section class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="logo">
                    <a href="index.html">
                        <img src="images/resources/logo.png" alt="Awesome Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="header-right">
                    <ul>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <h4>Call us now</h4>
                                <span><?= $settings->phoneNumber; ?></span>    
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-pin"></span>
                            </div>
                            <div class="text-holder">
                                <h4><?= $settings->address_a; ?></h4>
                                <span><?= $settings->address_b; ?></span>    
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-agenda"></span>
                            </div>
                            <div class="text-holder">
                                <h4>Mon - Sat</h4>
                                <span>09.00am to 06.00pm</span>    
                            </div>
                        </li>        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>   
<!--End header area-->       

<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--Start mainmenu-->
                <nav class="main-menu pull-left">
                    <div class="navbar-header">     
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li <?php echo ( $page_name == 'Home' || $page_parent == 'Home') ? 'class="current"' : ''; ?>><a href="<?= $baseurl; ?>">Home</a></li>
                            <li class="dropdown <?php echo ( $page_name == 'About Us' || $page_parent == 'About Us') ? 'active' : ''; ?>"><a href="about">About Us</a>
                                <ul>
                                    <li><a href="about">About <?= $settings->siteTitle ?></a></li>
                                    <li><a href="about#doctors">Meet Our Doctors</a></li>
                                    <li><a href="about#faq">FAQ’s</a></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php echo ( $page_name == 'Departments & Centers' || $page_parent == 'Departments & Centers') ? 'active' : ''; ?>"><a href="departments">Depts & Centers</a>
                                <ul>
                                    <li><a href="cardiac-clinic">Cardiac Clinic</a></li>
                                    <li><a href="psychiatry">Psychiatry</a></li>
                                    <li><a href="gynecology">Gynecology</a></li>
                                    <li><a href="neurology">Neurology</a></li>
                                    <li><a href="urology">Urology</a></li>
                                    <li><a href="ophthalmology">Ophthalmology</a></li>
                                    <li><a href="pediatrics">Pediatrics</a></li>
                                    <li><a href="vascular-center">Vascular Center</a></li>
                                </ul>
                            </li>
                            <li <?php echo ( $page_name == 'Programs' || $page_parent == 'Programs') ? 'class="current"' : ''; ?>><a href="programs">Programs</a></li>
                            <li <?php echo ( $page_name == 'Research' || $page_parent == 'Research') ? 'class="current"' : ''; ?>><a href="research">Research</a></li>
                            <li <?php echo ( $page_name == 'Contact Us' || $page_parent == 'Contact Us') ? 'class="current"' : ''; ?>><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <!--End mainmenu-->
                <!--Start mainmenu right box-->
                <div class="mainmenu-right-box pull-right">
                    <div class="consultation-button">
                        <a href="contact">For Consultation</a>    
                    </div>
                </div>
                <!--End mainmenu right box-->    
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area-->