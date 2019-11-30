<html lang="en">
    <head>
        @include('global.head') 
        <link href="{{URL::asset('assets/css/global/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css" />
        <!-- <link href="./assets/csinclude/global/components.min.css" rel="stylesheet" type="text/css" /> -->
        @include('global.head-global-styles')
    </head>
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed kt-page--loading">
        <!--begin::Header -->
        @include('global.header')
        <!--end::Header -->
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
            <div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                @include('global.sidebar')
                <!--end::Aside -->
                <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!--begin::Sub Header -->
                    @include('include.assessment-wizard.aw-subheader')
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid pt-4 bg-light-blue">
                        <div class="row align-items-start">
                            <div class="col-md-10">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                                    <div class="kt-portlet__body p-0">
                                        @include('include/risk-assessment/ra-form')>
                                        @include('include/risk-assessment/ra-accordion')
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid risk-assessment__actions">
                                    <div class="kt-portlet__body">
                                        @include('include/risk-assessment/ra-actions')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('global/vendors')
        <script src="{{URL::asset('assets/js/custom/bootstrap-tagsinput.min.js')}} " type="text/javascript"></script>
        <script src="{{URL::asset('assets/js/custom/risk-assessment.js')}}" type="text/javascript"></script>
    </body>
</html>