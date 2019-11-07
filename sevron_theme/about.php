<html lang="en" >
    <head>
        <?php include('global/head.php') ?>
        <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
<script src="https://unpkg.com/video.js/dist/video.min.js"></script>
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
                    <?php include('./template/about/about-subheader.php') ?>
                    <!--end:: Sub Header -->

                    <!-- begin::Page Content -->
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid p-0 m-0">
                        <div class="about-video-wrapper">
                            <div class="about-video-handler">
                                <video class='video-js' controls preload='auto' width='852' height='480'
                                poster='MY_VIDEO_POSTER.jpg' data-setup='{"fluid": true}'>
                                    <source src='https://www.w3schools.com/tags/movie.mp4' type='video/mp4'>
                                    <source src='https://www.w3schools.com/tags/movie.webm' type='video/webm'>
                                    <p class='vjs-no-js'>
                                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                                    <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                                    </p>
                                </video>
                            </div>
                        </div>

                        <div class="row pl-3 pr-3 pt-5 pb-5 bg-white">
                            <div class="col-md-3">
                                <img class="about-video-logo" src="assets/media/about/msds-icon.png">
                            </div>
                            <div class="col-md-7">
                                <h3 class="pl-4 font-weight-normal font-ash">
                                    Manage the substances used in your company, get notified of updates automatically and request ones you can't find.
                                </h3>
                            </div>
                        </div>
                    </div>	
                    <!-- end::Page Content -->
                </div>
            </div>
        </div>
        
        <!--begin::Page Scripts -->
        <?php include('./global/vendors.php') ?>
        
        <!--end::Page Scripts -->
    </body>
</html>