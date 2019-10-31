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
    <?php include('template/assessment-process/a_head.php'); ?>
     <!-- begin::Body -->
    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading" >
        <?php include('template/assessment-process/a_header.php'); ?>
        <?php include('template/assessment-process/a_sub-header.php'); ?>
        
        <div class="pl-4 pr-4 ">
            <!-- begin::Table -->
            <?php include('template/assessment-process/a_table-filters.php'); ?>
            <?php include('template/assessment-process/a_table.php'); ?>
            
            <!-- end::Table -->
        </div>

        <?php include('template/assessment-process/modal/a_modal-container.php'); ?>
        <?php include('template/assessment-process/a_vendors.php'); ?>
    </body>
    <!-- end::Body -->
</html>