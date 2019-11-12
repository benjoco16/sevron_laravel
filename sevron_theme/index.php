<html lang="en" >
    <!-- begin::Head -->
    <head>
        <?php include('./global/head.php') ?>
        <!--begin::Page Vendors Styles(used by this page) -->
            <link href="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="./assets/vendors/custom/jstree/jstree.bundle.rtl.min.css" />
        <!--end::Page Vendors Styles -->
        <?php include('./global/head-global-styles.php') ?>
    </head>
    <!-- end::Head -->
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed">
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
                        <!-- Hero -->
                        <?php include ('template/dashboard/section.hero.php'); ?>
                        <div class="p-4"> 
                            <div class="row">
                                <!-- Second Row -->
                                <?php include ('template/dashboard/section.progress-bars.php'); ?>
                                <!-- End of second row -->

                                <!-- Third Row -->
                                <?php include ('template/dashboard/section.performance-summary.php'); ?>
                                <?php include ('template/dashboard/section.monthly-rates.php'); ?>
                                <?php include ('template/dashboard/section.riddor-summary.php'); ?>
                                <!-- End of third row -->

                                <!-- Fourth Row -->
                                <?php include ('template/dashboard/section.daily-tasks.php'); ?>
                                <?php include ('template/dashboard/section.organisational-structure.php'); ?>
                                <!-- End of fourth row -->

                                <!-- Fifth Row -->
                                <?php include ('template/dashboard/section.incident-summary.php') ?>
                                <?php include ('template/dashboard/section.accident-types.php') ?>
                                <?php include ('template/dashboard/section.recent-assessments.php') ?>
                                <!-- End of fifth row -->
                            </div>
                        </div>
                        <!-- modal -->
                        <?php include('template/dashboard/modal.actions.php')?>
                        <!-- end modal -->
                    </div>
                </div>
            </div>
        </div>
        <?php include('./global/vendors.php') ?>
        <!--begin::Page Scripts(used by this page) -->
        <script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="./assets/js/custom/canvasjs.min.js"></script>
        <script src="./assets/js/custom/fusioncharts.js"></script>
        <script src="./assets/js/custom/fusioncharts.theme.fint.js?cacheBust=56"></script>
        <script src="./assets/js/custom/jscharts.min.js"></script>
        <script src="./assets/js/custom/jstree.min.js"></script>
        <script src="./assets/js/custom/charts.bundle.min.js"></script>
        <script src="./assets/js/custom/custom.js"></script>
        <!--end::Page Scripts(used by this page) -->
    </body>
</html>