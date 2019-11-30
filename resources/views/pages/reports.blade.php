<html lang="en" >
    <!-- begin::Head -->
    <head>
        @include('global.head')   
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/custom/jstree/jstree.bundle.rtl.min.css')}}">
        @include('global.head-global-styles')
    </head>
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed">
        <!--begin::Header -->
        @include('global.header')
        <!--end::Header -->
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                @include('global.sidebar')
                <!--end::Aside -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    
                    @include('include.reports.reports-sub-header')
                    <div class="kt-container--fluid kt-container kt-grid__item kt-grid__item--fluid overflow-hidden mt-4">    
                        <div class="row">
                            @include('include.reports.reports-organisational-chart')
                            @include('include.reports.reports-reports-list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('global.vendors')
        <script src="{{asset('assets/js/custom/jstree.min.js')}}"></script>
        <script src="{{asset('assets/js/custom/actions-page.js')}}"></script>
    </body>
</html>