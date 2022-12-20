<?php
   include('inc/config.php');
   
   $page_name = 'Pediatrics';
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
	                <h1>Pediatrics</h1>
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
                            <li class="active">Pediatrics</li>
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
                                        <img src="images/department/tab-content-7.jpg" alt="Awesome Image">
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
                        <li>
                            <a href="ophthalmology" data-toggle="tab">
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
                        <li class="active">
                            <a href="#pediatrics" data-toggle="tab">
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
                    <p>At <?= $settings->siteTitle ?> for Children (<?= $settings->siteTitle ?>) we have the expertise and experience, as well as the state-of-the-art facilities and technologies, to provide exceptional care for our patients.</p>
                    <p>Our patients have complete access to the resources of world-renowned Massachusetts General Hospital, including innovative research and treatments. As our patients grow, they also benefit from the smooth transition of care between pediatric and adult services at <?= $settings->siteTitle ?>.</p>
                    <ul>
                        <li>The oldest provider of pediatric services in Boston, <?= $settings->siteTitle ?> has provided comprehensive, compassionate care to children since 1821.</li>
                        <li><?= $settings->siteTitle ?> treats more than 170,000 patients annually, including both primary care visits and specialty care visits.</li>
                        <li>Annually, more than 12,000 pediatric emergency visits, 3,000 admissions and 3,500 births take place at <?= $settings->siteTitle ?>.</li>
                        <li><?= $settings->siteTitle ?> is home to the only proton beam facility in New England, which allows our team to provide groundbreaking therapy for children with cancerous brain tumors, eye tumors and other illnesses.</li>
                        <li><?= $settings->siteTitle ?> staff is involved in global health initiatives in developing countries and participates in national and international disaster relief efforts.</li>
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