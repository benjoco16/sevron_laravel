<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <?php include('./global/head.php') ?>
        </head>
        <!-- end::Head -->

        <!-- begin::Body -->
        <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >

            <!--begin::Header -->
        <?php include('./global/header.php') ?>
        <!--end::Header -->
            <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->

				<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
					<div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">
						<!-- begin:: Aside -->
                        <?php include('./global/sidebar.php') ?>
                        <!-- end:: Aside -->							
                        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
									
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <!-- Start Create New button -->
            <div class="kt-header__brand-nav dashboard_bt">
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle btn-lg btn-custom-blue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Create New
                        </button>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md">
                            <ul class="kt-nav kt-nav--bold kt-nav--md-space kt-margin-t-20 kt-margin-b-20">
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link active" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-user"></i></span>
                                        <span class="kt-nav__link-text">Human Resources</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon-feed"></i></span>
                                        <span class="kt-nav__link-text">er Relationship</span>
                                    </a>                                                 
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-settings"></i></span>
                                        <span class="kt-nav__link-text">Order Processing</span>
                                    </a>                                                 
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-chart2"></i></span>
                                        <span class="kt-nav__link-text">Accounting</span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon-security"></i></span>
                                        <span class="kt-nav__link-text">Finance</span>
                                    </a>                                                 
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-cup"></i></span>
                                        <span class="kt-nav__link-text">Administration</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <!-- End Create New Button -->

            <!-- Start Dashboard Options button -->
            <div class="kt-header__brand-nav">
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary btn-wide dopti" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Dashboard Options
                        </button>
                        
                    </div>
                </div>
            <!-- End Dashboard Options Button -->
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                    <a href="#" class="grad_bt">                       
                       User Guide  <i class="fa fa-graduation-cap"></i>    
                       <!--<img src="./assets/media/dashboard/userguid.svg">-->
                    </a>
            </div>
        </div>
    </div>
</div>
<!-- end:: Subheader -->

<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--Begin::Dashboard 4-->
        <!--Begin::Row-->
        <div class="row">
            <!-- Start Banner Section -->
            
            <div class="main_banner">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="ban_text">
                            <p>COSHH COMPLIANCE</p>
                            <h2>How Compliant Are you?</h2>
                            <div class="score_hldr">85.5%</div>
                            
                            <div class="top_list">
                                <h4>Top 3 Ways To Improve Your Score...</h4>
                                <ul>
                                    <li> <span class="kt-badge kt-badge--red kt-badge--dot"></span>  Review Critical Sds Update <strong>+100PTS</strong></li>
                                    <li> <span class="kt-badge kt-badge--yellow kt-badge--dot"></span>  Clear Overue Actions <strong>+18 PTS</strong></li>
                                    <li> <span class="kt-badge kt-badge--yellow kt-badge--dot"></span>  Add Missing Environmental <strong>Controls +16PTS</strong></li>
                                </ul>
                                <div class="ban_bt">
                                    <button type="button" data-toggle="modal" href="#large" class="btn btn-secondary btn-lg bt-color-gray">View All</button> <span>Your compliance score has not <br> change since: <strong>Aug 29, 2019</strong> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 image_dashboard">
                       <!--<img src="./assets/media/dashboard/banner_score.jpg" alt=""/>-->
                        <div id="banner-chart-container"></div>
                    </div>
                </div>
            </div>
            
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

<!-- end of update dev -->
	
									
<!--ENd:: Chat-->
        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    	<!--begin:: Global Mandatory Vendors -->
        <script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="./assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="./assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="./assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="./assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="./assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="./assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="./assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
    	    	   
		    	   <script src="./assets/js/demo11/scripts.bundle.js" type="text/javascript"></script>
				<!--end::Global Theme Bundle -->

                    <!--begin::Page Vendors(used by this page) -->
                        <script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
                        <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
                        <script src="./assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
                    <!--end::Page Vendors -->
         
                    <!--begin::Page Scripts(used by this page) -->
                        <script src="./assets/js/demo11/pages/dashboard.js" type="text/javascript"></script>
                    <!--end::Page Scripts -->

                     <!--begin::Page Scripts(used by this page) -->
                        <script src="./assets/js/demo12/pages/components/calendar/basic.js" type="text/javascript"></script>
                    <!--end::Page Scripts -->

                     <!--begin::Page Scripts(used by this page) -->
                     
                    <script type="text/javascript" src="./assets/js/custom/fusioncharts.js"></script>
                    <script type="text/javascript" src="./assets/js/custom/fusioncharts.theme.fint.js?cacheBust=56"></script>
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>

                    

                     <script src="./assets/js/custom/custom.js" type="text/javascript"></script>
                    <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>
