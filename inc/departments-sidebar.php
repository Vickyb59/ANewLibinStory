<div class="departments-sidebar">
    <!--Start single sidebar-->
    <div class="single-sidebar">
        <div class="title">
            <h3>Departments</h3>    
        </div>
        <ul class="all-departments">
            <li <?php echo ( $page_name == 'Cardiac Clinic' || $page_parent == 'Cardiac Clinic') ? 'class="active"' : ''; ?>>
                <a href="cardiac-clinic">Cardiac Clinic</a>
            </li>
            <li <?php echo ( $page_name == 'Psychiatry' || $page_parent == 'Psychiatry') ? 'class="active"' : ''; ?>>
                <a href="psychiatry">Psychiatry</a>
            </li>
            <li <?php echo ( $page_name == 'Gynecology' || $page_parent == 'Gynecology') ? 'class="active"' : ''; ?>>
                <a href="gynecology">Gynecology</a>
            </li>
            <li <?php echo ( $page_name == 'Neurology' || $page_parent == 'Neurology') ? 'class="active"' : ''; ?>>
                <a href="neurology">Neurology</a>
            </li>
            <li <?php echo ( $page_name == 'Urology' || $page_parent == 'Urology') ? 'class="active"' : ''; ?>>
                <a href="urology">Urology</a>
            </li>
            <li <?php echo ( $page_name == 'Ophthalmology' || $page_parent == 'Ophthalmology') ? 'class="active"' : ''; ?>>
                <a href="ophthalmology">Ophthalmology</a>
            </li>
            <li <?php echo ( $page_name == 'Pediatrics' || $page_parent == 'Pediatrics') ? 'class="active"' : ''; ?>>
                <a href="pediatrics">Pediatrics</a>
            </li>
            <li <?php echo ( $page_name == 'Vascular Center' || $page_parent == 'Vascular Center') ? 'class="active"' : ''; ?>>
                <a href="vascular-center">Vascular Center</a>
            </li>
        </ul>
    </div> 
    <!--Ens single sidebar--> 
    <!--Start single sidebar-->
    <div class="single-sidebar">
        <div class="title">
            <h3>Opening Hours</h3>    
        </div>
        <ul class="opening-time">
            <li>Mon to Sat: <span>09.00 to 18.00</span></li>
            <li>Sunday: <span>10.00 to 14.00</span></li>
        </ul>
    </div> 
    <!--Ens single sidebar--> 
    <!--Start single sidebar-->
    <div class="single-sidebar">
        <div class="title">
            <h3>Quick Contact</h3>    
        </div>
        <div class="contact-us">
            <ul class="contact-info">
                <li>
                    <div class="icon-holder">
                        <span class="flaticon-pin"></span>
                    </div>
                    <div class="text-holder">
                        <h5><?= $settings->address_a ?><br><?= $settings->address_b ?></h5>
                    </div>
                </li>
                <li>
                    <div class="icon-holder">
                        <span class="flaticon-technology"></span>
                    </div>
                    <div class="text-holder">
                        <h5><?= $settings->email ?></h5>
                    </div>
                </li>
                <li>
                    <div class="icon-holder">
                        <span class="flaticon-technology-1"></span>
                    </div>
                    <div class="text-holder">
                        <h5><?= $settings->phoneNumber ?></h5>
                    </div>
                </li>
            </ul>
        </div>
    </div> 
    <!--Ens single sidebar-->       
</div>