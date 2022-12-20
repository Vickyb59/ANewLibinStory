<?php
   include('inc/config.php');
   
   $page_name = 'Vascular Center';
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
	                <h1>Vascular Center</h1>
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
                            <li class="active">Vascular Center</li>
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
                                        <img src="images/department/tab-content-8.jpg" alt="Awesome Image">
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
                        <li class="active">
                            <a href="#vascular-center" data-toggle="tab">
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
                    <p>At the <?= $settings->siteTitle ?> Vascular Center, internationally recognized physicians from seven specialties provide patients with the most advanced treatment options available for vascular conditions.</p>
                    <h5>Brain Aneurysm and Arteriovenous Malformations Program</h5>
                    <p>The Brain Aneurysm and Arteriovenous Malformations Program at the <?= $settings->siteTitle ?> Vascular Center offers sophisticated diagnosis and innovative treatments for patients with intracranial (brain) aneurysms and rare conditions such as arteriovenous malformations (AVMs) of both the brain and spinal cord.</p>
                    <h5>Cardiovascular Genetics Program</h5>
                    <p>The Cardiovascular Genetics Program at <?= $settings->siteTitle ?> specializes in clinical evaluations, genetic screening and personalized treatment for individuals with inherited cardiovascular diseases.</p>
                    <h5>Center for Vascular Emergencies</h5>
                    <p>The Center for Vascular Emergencies is improving the care of patients with life-threatening vascular diseases through coordinated educational, research, and quality improvement initiatives within the Department of Emergency Medicine.</p>
                    <h5>Complex Coronary Intervention Program</h5>
                    <p>The Complex Coronary Intervention Program at the <?= $settings->siteTitle ?> Corrigan Minehan Heart Center treats coronary artery disease, the blockage of the heart's arteries due to cholesterol build-up.</p>
                    <h5>Fibromuscular Dysplasia Program</h5>
                    <p>The Fibromuscular Dysplasia Treatment Program at the <?= $settings->siteTitle ?> Vascular Center provides patients with specialized care for fibromuscular dysplasia (FMD), a commonly misdiagnosed condition in which the artery is abnormally formed, causing portions to thicken, narrow and even enlarge.</p>
                    <h5>Limb Evaluation and Preservation Program (LEAPP)</h5>
                    <p>LEAPP, through the Peripheral Artery Disease Center—part of the <?= $settings->siteTitle ?> Vascular Center—maximizes limb salvage for patients with peripheral artery disease through evidence-based and comprehensive diagnosis, treatment and care.</p>
                    <h5>Peripheral Artery Disease Program</h5>
                    <p>The Peripheral Artery Disease Treatment Program at the <?= $settings->siteTitle ?> Vascular Center provides specialized diagnosis and treatment options as well as ongoing care for patients with peripheral artery disease of the extremities.</p>
                    <h5>Renal and Mesenteric Artery Disease Program</h5>
                    <p>The Renal and Mesenteric Artery Disease Treatment Program at the <?= $settings->siteTitle ?> Vascular Center offers advanced diagnostic techniques and innovative treatments for patients with mesenteric vascular disease and renal vascular disease.</p>
                    <h5>Stroke and Carotid Artery Disease Program</h5>
                    <p>The Stroke and Carotid Artery Disease Program at the <?= $settings->siteTitle ?> Vascular Center offers innovative diagnostic, medical, surgical and endovascular interventions to treat patients with carotid stenosis or stroke.</p>
                    <h5>Thoracic Aortic Center</h5>
                    <p>Offering sophisticated, accurate diagnosis and leading-edge treatments for patients with types of aortic disease, including abdominal and thoracic.</p>
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