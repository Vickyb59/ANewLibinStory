<?php
   include('inc/config.php');
   
   $page_name = 'Cardiac Clinic';
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
	                <h1>Cardiac Clinic</h1>
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
                            <li class="active">Cardiac Clinic</li>
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
                        <div class="tab-pane active" id="ds1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="images/department/tab-content-1.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>
                        </div>
                        <!--End single tab pane-->
                    </div>
                    <ul class="nav nav-tabs tab-menu">
                        <li class="active">
                            <a href="#" data-toggle="tab">
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
                            <a href="gynecology" data-toggle="tab">
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
                    <p>Patients come from all over the world to undergo cardiac surgery at the Corrigan Minehan Heart Center. They have every resource of the hospital's vast expertise available to them, including extensive educational materials and access to promising new therapies through clinical trials.</p>
                    <h5>Conditions We Treat</h5>
                    <p>Our leading cardiac surgeons treat patients within several of the Corrigan Minehan Heart Center's condition-specific programs:</p>
                    <ul>
                        <li>Adult Congenital Heart Disease Program</li>
                        <li>Coronary Artery Bypass Surgery</li>
                        <li>Heart Failure and Cardiac Transplant Program</li>
                        <li>Heart Valve Program</li>
                        <li>Thoracic Aortic Center</li>
                    </ul>
                    <h3>Innovative Surgical Procedures Designed to Treat Heart Disease</h3>
                    <p>For the heart's valves</p>
                    <ul>
                        <li>Valve repair surgery</li>
                        <li>Valve replacement surgery</li>
                    </ul>
                    <p>For the heart’s blood vessels</p>
                    <ul>
                        <li>Coronary artery bypass grafting (bypass surgery)</li>
                    </ul>
                    <p>For the aorta, the heart’s largest artery</p>
                    <ul>
                        <li>Ascending aneurysm repair with an interposition tube graft</li>
                        <li>Aortic valve-preserving aneurysm repair</li>
                        <li>Composite aortic root replacement</li>
                        <li>Aortic arch surgery</li>
                        <li>Thoracoabdominal aneurysm repair</li>
                        <li>Stent graft repair</li>
                    </ul>
                    <p>To treat heart failure</p>
                    <ul>
                        <li>Heart transplant</li>
                        <li>Ventricular-assist devices (VADs)</li>
                    </ul>
                    <p>To treat adult congenital heart disease</p>
                    <ul>
                        <li>Atrial septal defect repair</li>
                        <li>Heart transplant</li>
                    </ul>
                    <p>To treat heart rhythm conditions</p>
                    <ul>
                        <li>Maze procedure for atrial fibrillation or atrial flutter</li>
                        <li>Cardiac resynchronization therapy (CRT)</li>
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