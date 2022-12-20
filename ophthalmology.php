<?php
   include('inc/config.php');
   
   $page_name = 'Ophthalmology';
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
	                <h1>Ophthalmology</h1>
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
                            <li class="active">Ophthalmology</li>
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
                                        <img src="images/department/tab-content-6.jpg" alt="Awesome Image">
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
                            <a href="#ophthalmology" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-6.jpg" alt="Awesome Image">
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
                            <a href="pediatrics" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-7.jpg" alt="Awesome Image">
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
                            <a href="vascular-center" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-8.jpg" alt="Awesome Image">
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
                    <p>The Department of Ophthalmology is an internationally renowned center for ophthalmology treatment and research.</p>
                    <p>Specialties include:</p>
                    <ul>
                        <li>Comprehensive ophthalmology and cataracts</li>
                        <li>Cornea</li>
                        <li>Glaucoma</li>
                        <li>Inherited retinal disorders</li>
                        <li>Laser vision correction/refractive surgery</li>
                        <li>Neuro-ophthalmology</li>
                        <li>Ocular immunology and uveitis</li>
                        <li>Ocular oncology</li>
                        <li>Ophthalmic plastic surgery</li>
                        <li>Optometry and contact lenses</li>
                        <li>Pediatric ophthalmology</li>
                        <li>Retina</li>
                        <li>Strabismus</li>
                        <li>Thyroid eye disease and orbital surgery</li>
                        <li>Vision rehabilitation</li>
                    </ul>
                    <p>Patients with eye emergencies or eye trauma may see trained eye trauma specialists in <?= $settings->siteTitle ?> Emergency Department 24 hours a day, 7 days a week.</p>
                    <p><?= $settings->siteTitle ?> Eye and Ear physicians and scientists also have Harvard teaching appointments and are leading research to find new methods of prevention, treatments and cures. In addition to their focus on patient care, the <?= $settings->siteTitle ?> Eye and Ear team has one goal: to cure the diseases that cause blindness.</p>
                    
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