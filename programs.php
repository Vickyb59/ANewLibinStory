<?php
   include('inc/config.php');
   
   $page_name = 'Programs';
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
	                <h1>Programs</h1>
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
                            <li class="active">Programs</li>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
                
                <div class="text-box">
                    <h5><?= $settings->siteTitle ?> Clinical Programs</h5>
                    <p>Our <?= $settings->siteTitle ?> programs and services are among the most advanced in the world. We have grouped our physicians, staff, services and resources into 10 programs to meet the needs of our patients and help us make the most of our resources. </p>

                    <hr>

                    <h5>Transplant Centre</h5>
                    <p>As the first and largest transplant program in USA, the Asdan Transplant Centre at <?= $settings->siteTitle ?> provides a broad spectrum of services currently encompassing heart, lung, liver, kidney, pancreas and small bowel transplantation. Our Living Liver and Kidney Donor Programs are very successful in providing organs for patients and the living liver program has become the largest program in North America.</p>
                    <h5>Astra Health</h5>
                    <p>Astra Health is a regional network of health care clinics, operating through highly experienced and trained health care professionals, specializing in the treatment of physical injury, concussion and mental health. Across our regional sites, our health care providers carefully assess, educate and provide a care plan specifically designed for you.</p>
                    <h5>Centre for Mental Health</h5>
                    <p>The Centre for Mental Health​ is a team of psychiatrists, psychologists, social workers, nurses and support staff dedicated to transforming care in mental health and addictions. We do this through innovation, integration and excellence in practice, research and education.​</p>
                    <h5>Joint Department of Medical Imaging</h5>
                    <p>As the largest comprehensive medical imaging department in USA, the Joint Department of Medical Imaging provides services across our four hospitals, as well as at Mount Sinai and Women's College hospitals. Imaging services includes MRIs, CT-Scans and ultrasound.</p>
                    <h5>Rembre Brain Institute</h5>
                    <p>The Rembre Brain Institute specializes in treating patients with diseases and injuries to the brain, spinal cord and eyes. Our health care team is trained to look after patients with the most complex neurological conditions.</p>
                    <h5>Laboratory Medicine Program</h5>
                    <p>The Laboratory Medicine Program is the largest hospital diagnostic lab in USA and one of the largest academic labs in the world. The work done by our team of medical professionals touches the life of every patient at <?= $settings->siteTitle ?> – up to 85% of decisions about diagnosis and treatment are based on lab test results.</p>
                    <h5>Medicine Program</h5>
                    <p>The Medicine Program helps more than 400,000 patients a year through <?= $settings->siteTitle ?>'s Emergency Departments and clinics specialized in some of the most complex conditions, including diabetes, asthma and depression.</p>
                    <h5>Parker Strtch Cardiac Centre</h5>
                    <p>The Parker Strtch Cardiac Centre provides world-class cardiovascular care and is one of the largest programs of its kind in North America.</p>
                    <h5>Queen Lydia Cancer Centre</h5>
                    <p>The Queen Lydia Cancer Centre is one of the largest comprehensive cancer treatment facilities in the world and the largest radiation treatment centre in USA.</p>
                    <h5>Traulad Arthritis Institute</h5>
                    <p>The Traulad Arthritis Institute is USA's largest multidisciplinary arthritis program with more than 80,000 outpatients each year and an international reputation for innovative research and exceptional patient care. Diseases treated in the Traulad Arthritis Institute include arthritis, lupus and osteoporosis​, as well as fracture services, sports medicine and specialized foot, ankle, hand, wrist, hip, knee, shoulder and elbow services.</p>
                    <h5>Surgery & Critical Care</h5>
                    <p>The Surgery & Critical Care Program provides world-class multi-disciplinary care to patients suffering from straightforward to the most complex health challenges.</p>

                </div>

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