<?php
   include('inc/config.php');
   
   $page_name = 'Urology';
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
	                <h1>Urology</h1>
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
                            <li class="active">Urology</li>
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
                                        <img src="images/department/tab-content-5.jpg" alt="Awesome Image">
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
                        <li class="active">
                            <a href="#urology" data-toggle="tab">
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
                    <p>The Department of Urology is committed to providing the highest quality patient care in a compassionate, safe and patient focused manner. Narrow your search for a specific treatment by using the search box and/or filters.</p>
                    <h5>Erectile Dysfunction Service</h5>
                    <p>The Erectile Dysfunction Service at the Massachusetts General Hospital Department of Urology treats male erectile dysfunction in a supportive and confidential environment.</p>
                    <h5>Female Urology and Voiding Dysfunction</h5>
                    <p>The Female Urology and Voiding Dysfunction Program at the Department of Urology features a team of specialists who treat urinary disorders with today's safest and most effective methods.</p>
                    <h5>General Urology</h5>
                    <p>The physicians in the General Urology Program evaluate patients for urological diseases and common disorders, and provide outstanding care to patients diagnosed with urological conditions.</p>
                    <h5>Kidney Cancer Treatment Program</h5>
                    <p>Our team is experienced in the treatment of rare, inherited and advanced forms of kidney cancer.</p>
                    <h5>Kidney Stone Program</h5>
                    <p>The Kidney Stone Program at the Department of Urology specializes in the innovative treatment and prevention of kidney stones, managing care for more patients with the disorder than any other hospital in Massachusetts.</p>
                    <h5>Pediatric Kidney Stone Program</h5>
                    <p>The Pediatric Kidney Stone Program provides comprehensive, family-centered care for infants, children and adolescents with kidney stones.</p>
                    <h5>Laser Photo-Vaporization of the Prostate (PVP)</h5>
                    <p>This new laser treatment, known as photo-vaporization of the prostate (PVP), combines the effectiveness of an invasive surgical procedure with the safety and ease of a minimally invasive procedure.</p>
                    <h5>Male Infertility Program</h5>
                    <p>The Male Infertility Program at the Massachusetts General Hospital Fertility Center helps couples conceive by using the least invasive treatment approaches possible.</p>
                    <h5>Male Infertility Program</h5>
                    <p>The Male Infertility Program at the Massachusetts General Hospital Fertility Center helps couples conceive by using the least invasive treatment approaches possible.</p>
                    <h5>Neuro-Urology Program</h5>
                    <p>The Neuro-Urology Program at the Massachusetts General Hospital Department of Urology is staffed by specialists who help patients with voiding problems due to neurological diseases and related urinary symptoms.</p>

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