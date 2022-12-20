<?php
   include('inc/config.php');
   
   $page_name = 'About Us';
   $page_parent = '';
   $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
   $page_description = 'Specialized hospital in...';
   include('inc/head.php');
?>
<body>
<div class="boxed_wrapper">

<!--Start Preloader -->
<?php include('inc/preloader.php') ?>
<!--End Preloader --> 

<!--Start header area-->

<?php include('inc/header.php') ?>

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>About Us</h1>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="breadcrumb-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left pull-left">
                        <ul>
                            <li><a href="<?= $baseurl ?>">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                    <div class="right pull-right">
                        <a href="#">
                            <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span> 
                        </a>   
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start welcome area-->
<section class="welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-holder">
                    <img src="images/resources/welcome.jpg" alt="Awesome Image">    
                </div>
                <div class="inner-content">
                    <p>As a tertiary referral ICU to provide state of the art care with the help of very good professionals and infrastructure.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-holder">
                    <div class="title">
                        <h1>Welcome to the <?= $settings->siteTitle ?></h1>
                        <p>Since time, <?= $settings->siteTitle ?> has been providing cutting‑edge treatment and compassionate care to patients from diverse religious and cultural backgrounds in Montreal, throughout Quebec and beyond. As one of the province’s largest and busiest acute-care hospitals, this 637‑bed McGill University teaching hospital admits more than 23,000 patients a year, while handling at least 300,000 outpatient visits, 67,000 emergency visits and more than 4,000 births on an annual basis.</p>    
                    </div>
                    <ul>
                        <li>
                            <div class="single-item">
                                <div class="iocn-box">
                                    <span class="flaticon-shapes"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Our Mission</h3>
                                    <p>To provide patient care of the highest quality in a humane and caring manner, with an emphasis on specialized and ultra-specialized care.</p>
                                    <div class="text">
                                        <p><i class="fa fa-hand-o-right"></i>To develop and promote an environment for leadership and excellence in health sciences education.</p>    
                                        <p><i class="fa fa-hand-o-right"></i>To actively participate in and lead the development and evaluation of new technologies in order to enhance patient care.</p>    
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-item">
                                <div class="iocn-box">
                                    <span class="flaticon-technology-2"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Our Vision</h3>
                                    <p>A Healthier World.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="button">
                        <a class="thm-btn bgclr-1" href="departments">Our Departments</a>
                    </div>    
                </div>
            </div>
        </div>
    </div>    
</section>
<!--End welcome area-->
 
<!--Start special features area-->
<section class="special-features-area">
    <div class="container">
        <div class="row">
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-transport"></span>    
                    </div>
                    <div class="text-box">
                        <h3>24 Hrs Ambulance</h3>
                        <p>Our emergency team is always on ground in case of any emergency at any time of the day/night.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-drink"></span>    
                    </div>
                    <div class="text-box">
                        <h3>Food & Dietry</h3>
                        <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-avatar"></span>    
                    </div>
                    <div class="text-box">
                        <h3>Special Nurses</h3>
                        <p>Special nurse services can be arranged through Nursing and our team is very experienced.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
        <div class="row">   
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-church"></span>    
                    </div>
                    <div class="text-box">
                        <h3>Places of Worship</h3>
                        <p>Places of worship exist in the vicinity and patients friends and families can visit there.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-phone"></span>    
                    </div>
                    <div class="text-box">
                        <h3>Customer Support</h3>
                        <p>Always ready to hear from our patients and their families.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="icon-box">
                        <span class="flaticon-medical-2"></span>    
                    </div>
                    <div class="text-box">
                        <h3>Very Fast Aid</h3>
                        <p>We are keen and big on saving lives first.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>    
    </div>
</section> 
<!--End special features area-->

<!--Start project faq area-->
<section class="project-faq-area sec-padding" id="faq">
    <div class="container">
        <div class="sec-title mar0auto text-center">
            <h1>Photo Gallery & FAQ’s</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="latest-project">
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/latest-project-1.jpg" alt="Awesome Image">
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/latest-project-2.jpg" alt="Awesome Image">
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/latest-project-3.jpg" alt="Awesome Image">
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/latest-project-4.jpg" alt="Awesome Image">
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/latest-project-5.jpg" alt="Awesome Image">
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/latest-project-6.jpg" alt="Awesome Image">
                        </div>
                    </div>
                    <!--End single blog post-->
                </div>    
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="faq-content">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is the hospital located?</h4>
                            </div>
                            <div class="accord-content">
                                <p><?= $settings->address_a.", ".$settings->address_b ?>.</p>
                            </div>
                        </div>
                        <!--End single accordion box--> 
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block last">
                            <div class="accord-btn last">
                                <h4>What are the visiting hours?</h4>
                            </div>
                            <div class="accord-content">
                                <p>Between 9am and 6pm</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How many visitors are allowed at a time?</h4>
                            </div>
                            <div class="accord-content">
                                <p>There is no particular number for this, but please be reasonable</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End project faq area--> 

<!--Start fact counter area-->
<section class="fact-counter-area black-bg" style="background-image:url(images/resources/fact-counter-bg-v2.jpg);">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Quality & Safety At <?= $settings->siteTitle ?></h1>
            <p>We are committed to delivering the highest quality and safest care possible for every patient.</p>
        </div>
    </div>
</section>
<!--End fact counter area-->

<!--Start team area-->
<?php include('inc/team.php') ?>
<!--End team area--> 

<!--Start certificates area-->  
<section class="certificates-area">
    <div class="container">
        <div class="sec-title">
            <h1>Awards & Recognition</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="certificates">
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/1.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/2.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/3.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/4.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/1.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/2.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/3.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/4.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/1.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/2.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/3.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/certificates/4.jpg" alt="Awesome Image">
                        </div>
                    </a>
                    <!--End single item-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End certificates area-->  
  
<!--Start footer area-->  
<?php include('inc/footer.php') ?>
<!--End footer bottom area-->

</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-triangle-inside-circle"></span></div>

<!--Start scripts area-->  
<?php include('inc/scripts.php') ?>
<!--End scripts bottom area-->

</body>

</html>