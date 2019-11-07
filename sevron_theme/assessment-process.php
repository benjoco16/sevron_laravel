<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <?php include('./global/head.php') ?>
    </head>
     <!-- begin::Body -->
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed"  >
        <?php include('./global/header.php') ?>
        <div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
            <!--begin::Aside -->
            <?php include('./global/sidebar.php') ?>   

            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                <?php include('template/assessment-process/a_sub-header.php'); ?>
                <div class="kt-container--fluid  kt-grid__item kt-grid__item--fluid overflow-hidden">
                    <div class="pl-4 pb-4">
                        <?php include('template/assessment-process/a_table-filters.php'); ?>
                        <?php include('template/assessment-process/a_table.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include('template/assessment-process/modal/a_modal-container.php'); ?>
        <?php include('template/assessment-process/a_vendors.php'); ?>
    </body>
    <!-- end::Body -->
</html>