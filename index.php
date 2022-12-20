<?php
   include('inc/config.php');
   
   $page_name = 'Home';
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

<!--Start rev slider wrapper-->     
<?php include('inc/slider.php') ?>
<!--End rev slider wrapper-->

<!--Start call to action area-->
<section class="callto-action-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="title-box text-center">
                        <span class="flaticon-calendar"></span>
                        <h2>Make an Appointment</h2>    
                    </div>
                    <div class="form-holder clearfix">
                        <form id="appointment" class="clearfix" name="appointment-form" action="<?= $baseurl ?>/inc/sendmail.php" method="post">
                            <div class="single-box mar-right-30">    
                                <div class="input-box">
                                    <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                                </div>
                                <div class="input-box">
                                    <select class="selectmenu">
                                        <option selected="selected">Select Doctor</option>
                                        <option>Marc Parcival</option>
                                        <option>Alen Bailey</option>
                                        <option>Basil Andrew</option>
                                        <option>Giles Franklin</option>
                                        <option>Edgar Denzil</option>
                                        <option>Garfield Feris</option>
                                    </select>  
                                </div>
                            </div>
                            <div class="single-box">    
                                <div class="input-box">  
                                    <select class="selectmenu">
                                        <option selected="selected">Select Department</option>
                                        <option>Cardiac Clinic</option>
                                        <option>Psychiatry</option>
                                        <option>Gynecology</option>
                                        <option>Neurology</option>
                                        <option>Urology</option>
                                        <option>Ophthalmology</option>
                                        <option>Pediatrics</option>
                                        <option>Vascular Center</option>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <input type="text" name="date" placeholder="Select Date" id="datepicker">
                                    <div class="icon-box">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>       
                            </div>
                            <button class="thm-btn bgclr-1" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>    
                        </form>      
                    </div> 
                       
                </div>
            </div>
        </div>
    </div>
</section>
<!--End call to action area-->

<!--Start Medical Departments area-->
<section class="medical-departments-area">
    <div class="container">
        <div class="sec-title">
            <h1>Medical Departments</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="medical-departments-carousel">
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-cardiology"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Cardiology</h3>
                            <p> Our team of cardiologists, cardiac surgeons, cardiac anesthesiologists, cardiac...</p>
                        </div>
                        <a class="readmore" href="cardiac-clinic">Read More</a>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-medical-2"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Psychiatry</h3>
                            <p> For over 85 years we've provided the highest quality care to adults, children and adolescents.</p>
                        </div>
                        <a class="readmore" href="psychiatry">Read More</a>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-vagina"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Gynecology</h3>
                            <p> We've been recognized for advancing the science and the quality of care for women since 1900.</p>
                        </div>
                        <a class="readmore" href="gynecology">Read More</a>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-neurology"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Neurology</h3>
                            <p> We provide comprehensive consultative services, diagnostic testing and treatment...</p>
                        </div>
                        <a class="readmore" href="neurology">Read More</a>
                    </div>
                    <!--End single item-->
                </div>
            </div>    
        </div>
    </div>
</section>
<!--End Medical Departments area--> 
  
<!--Start service area-->
<section class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="img-holder">
                    <img src="images/services/doctor.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <p><?= $settings->siteTitle; ?>’s Laboratory provides services to in-patients.</p>  
                    </div>    
                </div>
            </div>
            <div class="col-md-8">
                <div class="text-holder">
                    <!--Start tab box-->
                    <div class="tab-box">
                        <div class="tab-content">
                            <!--Start single tab pane-->
                            <div class="tab-pane active" id="laboratory">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Laboratory</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>Laboratory Analysis</h3>
                                                <p>The Laboratory draws blood samples for medical blood test analysis. Upon requisition from a physician, a certified medical technologist performs the blood test, and blood work is done. Ninety percent of all blood test results are processed within the same day of the test.</p>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="images/services/service-big-2.jpg" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>  
                            </div>
                            <!--End single tab pane-->
                        </div>
                        <ul class="nav nav-tabs tab-menu">
                            <li>
                                <a href="#opthalmology" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-1.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3>Opthalmology</h3>
                            </li>
                            <li class="active">
                                <a href="#laboratory" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-2.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </a>
                                <h3>Laboratory</h3>
                            </li>
                            <li>
                                <a href="#cardiac" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-3.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3>Cardiac Clinic</h3>
                            </li>
                            <li>
                                <a href="#outpatient" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-4.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3>OutPatient</h3>
                            </li>
                        </ul> 
                    </div>
                    <!--End tab box--> 
                </div>
            </div>
        </div>
    </div>
</section>  
<!--End service area-->
 
<!--Start team area-->
<?php include('inc/team.php') ?>
<!--End team area-->
 
<!--Start fact counter area-->
<section class="fact-counter-area" style="background-image:url(images/resources/fact-counter-bg.jpg);">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Quality & Safety at <?= $settings->siteTitle ?></h1>
            <p>We are committed to delivering the highest quality and safest care possible for every patient.</p>
        </div>
    </div>
</section>
<!--End fact counter area-->

<!--Start facilities Appointment area-->
<section class="facilities-appointment-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="facilities-content-box">
                    <div class="sec-title">
                        <h1>Our Facilities</h1>
                        <span class="border"></span>
                    </div>
                    <!--Start facilities carousel-->
                    <div class="facilities-carousel">
                       
                        <!------Start single facilities item------->
                        <div class="single-facilities-item">
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-transport"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>24 Hrs Ambulance</h3>
                                            <p>Our emergency team is always on ground in case of any emergency at any time of the day/night.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-drink"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Food & Dietary</h3>
                                            <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-avatar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Special Nurses</h3>
                                            <p>Special nurse services can be arranged through Nursing and our team is very experienced.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-church"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Places of Worship</h3>
                                            <p>Places of worship exist in the vicinity and patients friends and families can visit there.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div>
                        <!-------End single facilities item------>
                       
                        <!------Start single facilities item------->
                        <div class="single-facilities-item">
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-transport"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>24 Hrs Ambulance</h3>
                                            <p>Our emergency team is always on ground in case of any emergency at any time of the day/night.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-drink"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Food & Dietary</h3>
                                            <p>The Dietitian plans the diet based on the therapeutic needs of the patient, Local specialties, Continental.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                            <div class="row">
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-avatar"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Special Nurses</h3>
                                            <p>Special nurse services can be arranged through Nursing and our team is very experienced.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <div class="icon-box">
                                                <div class="icon">
                                                    <span class="flaticon-church"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Places of Worship</h3>
                                            <p>Places of worship exist in the vicinity and patients friends and families can visit there.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div>
                        <!-------End single facilities item------>
                        
                     
                        
                    </div>
                    <!--End facilities carousel-->    
                </div>
            </div>
            <div class="col-md-4">
                <div class="appointment">
                    <div class="sec-title">
                        <h1>Make an Appointment</h1>
                        <span class="border"></span>
                    </div>
                    <form id="appointment-form" name="appointment-form" action="<?= $baseurl ?>/inc/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-box">
                                    <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                                </div>
                                <div class="input-box">
                                    <input type="email" name="form_email" value="" placeholder="Your Email" required="">
                                </div>
                                <div class="input-box">
                                    <select class="selectmenu">
                                        <option selected="selected">Select Department</option>
                                        <option>Cardiology</option>
                                        <option>Pulmonology</option>
                                        <option>Gynecology</option>
                                        <option>Neurology</option>
                                        <option>Urology</option>
                                        <option>Gastrology</option>
                                        <option>Pediatrician</option>
                                        <option>Laboratory</option>
                                    </select>
                                </div>
                                <div class="input-box">   
                                    <select class="selectmenu">
                                        <option selected="selected">Select Doctor</option>
                                        <option>Balance Body Mind</option>
                                        <option>Physical Activity</option>
                                        <option>Support & Motivation</option>
                                        <option>Exercise Program</option>
                                        <option>Healthy Daily Life</option>
                                        <option>First Hand Advice</option>
                                    </select>
                                </div>
                                <button class="thm-btn bgclr-1" type="submit">submit</button>        
                            </div>
                        </div>
                    </form>        
                </div>
            </div>
        </div>
    </div>    
</section>
<!--End facilities Appointment area-->
 
<!--Start brand area-->
<section class="brand-area" id="awards" style="background-image:url(images/awards/awards-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-holder">
                    <div class="sec-title">
                        <h1>You’re in Good Hands</h1>
                    </div>
                    <div class="text">
                        <p>We believe in bringing the most modern techniques and delivering extraordinary care to ailing population with the highest levels of ethics and standards. We are committed to continuing medical education, through our fellowship and DNB programs.</p>
                        <p>We organize atleast one conference a month and support research foundation for continued advancement.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="awards-holder">
                    <div class="sec-title">
                        <h1>Clinic Awards</h1>
                    </div>
                    <div class="row">
                        <!--Start single item-->
                        <div class="col-md-6">
                            <div class="single-item">
                                <a href="#"><img src="images/awards/1.png" alt="Awesome Brand Image"></a>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6">
                            <div class="single-item">
                                <a href="#"><img src="images/awards/2.png" alt="Awesome Brand Image"></a>
                            </div>
                        </div>
                        <!--End single item-->
                        
                        <!--Start single item-->
                        <div class="col-md-6">
                            <div class="single-item">
                                <a href="#"><img src="images/awards/1.png" alt="Awesome Brand Image"></a>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-6">
                            <div class="single-item">
                                <a href="#"><img src="images/awards/2.png" alt="Awesome Brand Image"></a>
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>
<!--End brand area-->

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