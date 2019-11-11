<html lang="en" >
    <head>
        <?php include('global/head.php'); ?>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
        <link href="./assets/css/global/components.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >
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
                    <?php include('./template/assessment-wizard/aw-subheader.php'); ?>
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid pl-4 pr-4 pt-4 bg-light-blue">
                        <div class="row align-items-start">
                            <div class="col-md-10">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                                    <div class="kt-portlet__body p-0">
                                        <?php include('template/risk/r_first_section.php')?>
                                        <?php include('template/risk/r_accordion_section.php')?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid rs-actions">
                                    <div class="kt-portlet__body">
                                        <?php include('template/risk/r_actions.php') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('template/risk/r_vendors.php') ?>
    </body>
</html>