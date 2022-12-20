<?php
   include('inc/config.php');
   
   $page_name = 'Gynecology';
   $page_parent = 'Departments & Centers';
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
	                <h1>Gynecology</h1>
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
                            <li><a href="departments">Department</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Gynecology</li>
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

<!--Start departments single area-->
<section id="departments-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">  
                <div class="tab-box">
                    <div class="tab-content">
                        <!--Start single tab pane-->
                        <div class="tab-pane active" id="ds2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="images/department/tab-content-3.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>
                        </div>
                        <!--End single tab pane-->
                    </div>
                    <ul class="nav nav-tabs tab-menu">
                        <li>
                            <a href="cardiac-clinic" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-1.jpg" alt="Awesome Image">
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
                        </li>
                        <li>
                            <a href="psychiatry" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-2.jpg" alt="Awesome Image">
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
                        </li>
                        <li class="active">
                            <a href="#gynecology" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-3.jpg" alt="Awesome Image">
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
                        </li>
                        <li>
                            <a href="neurology" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-4.jpg" alt="Awesome Image">
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
                        </li>
                        <li>
                            <a href="urology" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-5.jpg" alt="Awesome Image">
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
                        </li>
                    </ul>
                </div>
                
                <div class="text-box">
                    <p>We strive to offer world-class care with a personal touch. A hallmark of our service is our multidisciplinary team-based approach to patient care. Our collaborative practice model includes physicians, nurse practitioners, nurses and medical assistants who work together to provide optimal care for you. When patients present with symptoms that go beyond gynecology, we work with specialists in different fields throughout <?= $settings->siteTitle ?> to make the correct diagnosis and administer treatment.</p>
                    <p>We offer quality, evidence-based gynecologic services to women and treat every person’s gynecological concerns with dignity and respect. Our clinicians are renowned for their expertise in providing treatments and therapies for the complete spectrum of other gynecologic issues, including:</p>
                    <ul>
                        <li>Family planning, contraceptive management, abortion care</li>
                        <li>Preconceptual counseling and fertility</li>
                        <li>Abnormal Pap smears</li>
                        <li>Fibroids</li>
                        <li>Endometriosis</li>
                        <li>Ovarian cysts</li>
                        <li>Heavy, painful or irregular periods</li>
                        <li>Pelvic pain and pelvic infections</li>
                        <li>Menopausal symptoms</li>
                        <li>Vaginal and vulvar issues</li>
                    </ul>
                    <h5>Well Woman Care</h5>
                    <p>Most patients can receive routine well woman care, including pap smears for cervical cancer screening, with their primary care providers (PCP) as part a single convenient primary care visit. If you are healthy and do not have any gynecologic problems, we encourage you to schedule this routine well woman care with your PCP.</p>
                    <p>In some situations, patients prefer that their routine gynecologic care be done by a gynecologist. In this case, your well woman gynecologic exam will be scheduled with one of our highly skilled, experienced certified women’s health nurse practitioners or certified nurse-midwives.</p>
                    <h5>Family Planning – Contraception & Abortion</h5>
                    <p>We are committed to providing comprehensive, full scope family planning care including contraception and abortion care. We collaborate with physicians, midwives, nurse practitioners, nurses and a multi-disciplinary team including colleagues in the Ultrasound & Prenatal Diagnostics Center, Maternal-Fetal Medicine, the Fetal Care Program and clinical social workers in Social Service to provide patient-centered care. We offer personalized contraception counseling and provision of all prescriptions including IUDs and contraceptive implants. In addition, we provide medication abortions and surgical abortion care in accordance with Massachusetts state law.</p>
                    <p>We provide this care at the Yawkey Center for Outpatient Care, Suite 4E, <?= $settings->siteTitle ?> Waltham, Chelsea HealthCare Center, and Revere HealthCare Center. Current <?= $settings->siteTitle ?> patients can call the Gynecology department at 617-724-6850 to schedule an appointment. Patients who do not yet have a <?= $settings->siteTitle ?> medical record number can call the patient care team at 617-726-2000 for new patient registration.</p>
                    <h5>Specialty Care</h5>
                    <p>Our gynecology services also includes a number of sub-specialty divisions that provide more specialized care:</p>
                    <ul>
                        <li>Reproductive Endocrinology and Infertility (REI)</li>
                        <li>Female Pelvic Medicine & Reconstructive Surgery (FPMRS)</li>
                        <li>Gynecologic Oncology</li>
                        <li>Minimally Invasive Gynecologic Surgery (MIGS)</li>
                    </ul>
                </div>

            </div> 
            
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                <?php include('inc/departments-sidebar.php') ?>
            </div>
            
        </div>
    </div>
</section>
<!--End Medical Departments area--> 

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