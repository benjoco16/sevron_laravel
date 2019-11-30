<html lang="en" >
    <!-- begin::Head -->
    <head>
        @include('global.head')
        <!--begin::Page Vendors Styles(used by this page) -->
            <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('assets/vendors/custom/jstree/jstree.bundle.rtl.min.css')}}" rel="stylesheet" type="text/css" />
            
        <!--end::Page Vendors Styles -->
        @include('global.head-global-styles')
    </head>
    
    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed">
        <!--begin::Header -->
        @include('global.header')
        <!--end::Header -->
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                @include('global.sidebar')
                <!--end::Aside -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!--begin::Sub Header -->
                    @include('include.dashboard2.d2-subheader')
                    @include('include.dashboard.section-hero')
                    <!--end:: Sub Header -->
                    <div class="kt-container--fluid kt-container  kt-grid__item kt-grid__item--fluid overflow-hidden">
                        
                        
                        <div class="mt-4">
                            <div class="row">
                                <?php //include ('include/dashboard2/d2-section2.php') ?>
                                @include('include.dashboard2.d2-section2')

                                <!-- Second Row -->
                                @include ('include.dashboard.section-progress-bars')
                                <!-- End of second row -->

                                <!-- Third Row -->
                                @include('include.dashboard.section-performance-summary')
                                @include('include.dashboard.section-monthly-rates')
                                @include('include.dashboard.section-riddor-summary')
                                <!-- End of third row -->

                                <!-- Fourth Row -->
                                @include('include.dashboard.section-daily-tasks')
                                @include('include.dashboard.section-organisational-structure')
                                <!-- End of fourth row -->

                                <!-- Fifth Row -->
                                @include('include.dashboard.section-incident-summary')
                                @include('include.dashboard.section-accident-types')
                                @include('include.dashboard.section-recent-assessments')
                                <!-- End of fifth row -->
                            </div>
                        </div>
                        <!-- modal -->
                        @include('include.dashboard.modal-actions')
                        <!-- end modal -->
                    </div>
                </div>
            </div>
        </div>

        @include('global.vendors')
        <!--begin::Page Scripts(used by this page) -->
        <script type="text/javascript" src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/custom/canvasjs.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/custom/fusioncharts.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/custom/fusioncharts.theme.fint.js?cacheBust=56')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/custom/jscharts.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/custom/jstree.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/custom/charts.bundle.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/custom/custom.js')}}"></script>
        <script src="{{asset('assets/js/custom/dashboard2.js')}}"></script>
    </body>
</html>