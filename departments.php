<?php
   include('inc/config.php');
   
   $page_name = 'Departments & Centers';
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
	                <h1>Departments</h1>
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
                            <li><a href="<?= $baseurl; ?>">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Departments</li>
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

<!--Start Medical Departments area-->
<section class="medical-departments-area departments-page">
    <div class="container">
        <div class="row">
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="iocn-holder">
                        <span class="flaticon-cardiology"></span>    
                    </div>
                    <div class="text-holder">
                        <h3>Cardiology</h3>
                        <p>Our world-class physicians and nurses specialize in specific forms of heart disease...</p>
                    </div>
                    <a class="readmore" href="cardiac-clinic">Read More</a>
                </div>
            </div> 
            <!--End single item--> 
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="iocn-holder">
                        <span class="flaticon-medical-2"></span>    
                    </div>
                    <div class="text-holder">
                        <h3>Psychiatry</h3>
                        <p> For over 85 years we've provided the highest quality care to adults, children and adolescents...</p>
                    </div>
                    <a class="readmore" href="psychiatry">Read More</a>
                </div>
            </div> 
            <!--End single item-->
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="iocn-holder">
                        <span class="flaticon-neurology"></span>    
                    </div>
                    <div class="text-holder">
                        <h3>Gynecology</h3>
                        <p> We've been recognized for advancing the science and the quality of care for women since 1900...</p>
                    </div>
                    <a class="readmore" href="gynecology">Read More</a>
                </div>
            </div> 
            <!--End single item--> 
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="iocn-holder">
                        <span class="flaticon-lungs"></span>    
                    </div>
                    <div class="text-holder">
                        <h3>Neurology</h3>
                        <p>We provide comprehensive consultative services, diagnostic testing and treatment...</p>
                    </div>
                    <a class="readmore" href="neurology">Read More</a>
                </div>
            </div> 
            <!--End single item-->          
        </div>
        
        <div class="row">
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="iocn-holder">
                        <span class="flaticon-kidneys"></span>    
                    </div>
                    <div class="text-holder">
                        <h3>Urology</h3>
                        <p> The Department of Urology is dedicated to clinical excellence in urologic care...</p>
                    </div>
                    <a class="readmore" href="urology">Read More</a>
                </div>
            </div> 
            <!--End single item--> 
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="iocn-holder">
                        <span class="flaticon-triangle-inside-circle"></span>    
                    </div>
                    <div class="text-holder">
                        <h3>Ophthalmology</h3>
                        <p>We offer expert care for the full range of conditions affecting the eyes...</p>
                    </div>
                    <a class="readmore" href="ophthalmology">Read More</a>
                </div>
            </div> 
            <!--End single item-->
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="iocn-holder">
                        <span class="flaticon-stethoscope-1"></span>    
                    </div>
                    <div class="text-holder">
                        <h3>Pediatrician</h3>
                        <p>We provide a full spectrum of care — from primary care to a broad range...</p>
                    </div>
                    <a class="readmore" href="pediatrics">Read More</a>
                </div>
            </div> 
            <!--End single item--> 
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="iocn-holder">
                        <span class="flaticon-research"></span>    
                    </div>
                    <div class="text-holder">
                        <h3>Vascular Center</h3>
                        <p> The only vascular centers in the country with specialists in every area of vascular disease...</p>
                    </div>
                    <a class="readmore" href="vascular-center">Read More</a>
                </div>
            </div> 
            <!--End single item-->          
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