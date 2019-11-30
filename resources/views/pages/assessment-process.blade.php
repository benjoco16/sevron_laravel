<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        @include('global.head')        
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/general/summernote/dist/summernote.css')}}">
        @include('global.head-global-styles')
    </head>
     <!-- begin::Body -->
    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed"  >
        <!--begin::Header -->
        @include('global.header')
        <!--end::Header -->
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                @include('global.sidebar')
                <!--end::Aside -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <?php //include('include/assessment-process/ap.sub-header.php'); ?>
                    @include('include.assessment-process.ap-sub-header')
                    <div class="kt-container--fluid kt-container  kt-grid__item kt-grid__item--fluid overflow-hidden">
                        <div class="">
                            @include('include.assessment-process.ap-table-filters')
                            @include('include.assessment-process.ap-table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('include.assessment-process.modal.ap-modal')
        @include('global.vendors')
        
        <script type="text/javascript" src="{{asset('assets/js/custom/assessment-process.js')}}"></script>
    </body>
    <!-- end::Body -->
</html>