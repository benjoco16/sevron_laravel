<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <?php include('./global/head.php') ?>
    </head>
    
    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed"  >
        
        <!--begin::Header -->
        <?php include('./global/header.php') ?>
        <!--end::Header -->

        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                <?php include('./global/sidebar.php') ?>
                <!--end::Aside -->

                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!--begin::Sub Header -->
                    <?php include('./template/dashboard2/d2-subheader.php') ?>
                    <!--end:: Sub Header -->

                    <div class="kt-container--fluid  kt-grid__item kt-grid__item--fluid overflow-hidden">
                        <?php include('template/dashboard2/d2-banner.php'); ?>

                        <div class="second_section"> 
                            <div class="row">
                                <?php include ('template/home_template/list_box.php'); ?>
                                <?php include ('template/home_template/third_section.php'); ?>
                                <?php include ('template/home_template/fourth-section.php'); ?>
                                <?php include ('template/home_template/fifth-section.php'); ?>
                            </div>
                        </div>
                        <!-- modal -->
                        <?php include('template/home_modal.php')?>
                        <!-- end modal -->
                    </div>
                </div>
            </div>
        </div>

        <?php include('./global/vendors.php') ?>

        <!--begin::Page Scripts(used by this page) -->
        <script src="assets/js/custom/canvasjs.min.js"></script>
        <script type="text/javascript" src="./assets/js/custom/fusioncharts.js"></script>
        <script type="text/javascript" src="./assets/js/custom/fusioncharts.theme.fint.js?cacheBust=56"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
        <script src="https://cdnjs.com/libraries/Chart.js"></script>

        <script src="./assets/js/custom/custom.js" type="text/javascript"></script>
    </body>
</html>