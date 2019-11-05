<html lang="en" >
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <?php include('./global/head.php') ?>
    </head>


    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >
        
        <!--begin::Header -->
        <?php include('./global/header.php') ?>
        <!--end::Header -->

        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                <?php include('./global/sidebar.php') ?>
                <!--end::Aside -->

                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!--begin::Sub Header -->
                    <?php include('./template/dashboard2/d2-subheader.php') ?>
                    <!--end:: Sub Header -->

                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid pr-0 overflow-hidden">
                        <!--Begin::Dashboard 4-->
                        <!--Begin::Row-->
                        <div class="row">
                            <!-- Start Banner Section -->
                            <?php include('template/home_template/banner.php') ?>
                            <!-- End Banner Section -->
                            
                        
                            
                        </div>
                        
                        <!--End::Row-->	
                        <div class="second_section"> 
                            <div class="row">
                            <?php include ('template/home_template/list_box.php'); ?>
                            </div>
                        </div>
                        
                        <div class="third_section">
                            <!--Begin::Row-->
                            <div class="row">
                            <?php include ('template/home_template/third_section.php'); ?>
                            </div>
                            <!--End::Row-->
                        </div>
                        
                        <div class="fourth_section">
                            <!--Begin::Row-->
                            <div class="row">
                            <?php include ('template/home_template/fourth-section.php'); ?>
                            </div>
                            <!--End::Row-->
                        </div>

                        <div class="fifth_section">
                            <!--Begin::Row-->
                            <div class="row">
                            <?php include ('template/home_template/fifth-section.php'); ?>
                            </div>
                            <!--End::Row-->
                        </div>
                        
                        <!-- modal -->
                        <?php include('template/home_modal.php')?>
                        <!-- end modal -->
                        
                        <!--Begin::Row-->
                    
                    </div>	
                    <!-- end:: Content -->
                </div>
            </div>						
        </div>
        <?php include('./global/vendors.php') ?>
    </body>
    <!-- end::Body -->
</html>
