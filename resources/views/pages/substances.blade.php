<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        @include('global.head')
        <link href="{{asset('assets/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
        @include('global.head-global-styles')
    </head>
    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-aside--enabled kt-aside--fixed"  >
        
        <!--begin::Header -->
        @include('global.header')
        <!--end::Header -->

        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch substances" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                @include('global.sidebar')

                <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    @include('include.substances.substances-sub-header')
                    @include('include.substances.substances-header')
                   
                    <div class="kt-container py-4 kt-container--fluid">
                        <div class="kt-portlet">
                            <div class="substances-container">
                                @include('include.substances.substances-aside')
                                @include('include.substances.substances-result')
                            </div>

                                @include('include.substances.substances-pagination')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('global.vendors')
    </body>
</html>