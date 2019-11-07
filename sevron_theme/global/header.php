<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
        <div class="kt-header-mobile__logo">
            <a href="/sevron/sevron_theme">
                <img alt="Logo" src="./assets/media/logos/logo-mobile.png" style="max-width: 40px"/>
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
                        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
            
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed "  data-ktheader-minimize="on" >
                        <div class="kt-container  kt-container--fluid pr-0">
                            <!-- begin:: Brand -->
                            <div class="kt-header__brand " id="kt_header_brand">
                                <div class="kt-header__brand-logo">
                                    <a href="/sevron/sevron_theme">
                                        <img alt="Logo" src="./assets/media/logos/logo-dark.png" height="50"/>
                                    </a>		
                                </div> 
                            </div>
                            <!-- end:: Brand -->		

                            <!-- begin:: Header Topbar -->
                            <div class="kt-header__topbar">
                                <!--begin: Search -->
                                <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"  id="kt_quick_search_toggle">

                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                        <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
                                <form method="get" class="kt-quick-search__form">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                                        <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                                        <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
	<!--end: Search -->

	<!--begin: Notifications -->
	<div class="kt-header__topbar-item dropdown">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
			<span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
			<span class="kt-hidden kt-badge kt-badge--danger"></span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
			<form>
                <!--begin: Head -->
                <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
                    <h3 class="kt-head__title">
                        User Notifications
                        &nbsp;
                        <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
                    </h3>
                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
                        </li>
                    </ul>
                </div>
<!--end: Head -->

                <div class="tab-content">
                    <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New order has been received
                                    </div>
                                    <div class="kt-notification__item-time">
                                        2 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New er is registered
                                    </div>
                                    <div class="kt-notification__item-time">
                                        3 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Application has been approved
                                    </div>
                                    <div class="kt-notification__item-time">
                                        3 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New file has been uploaded
                                    </div>
                                    <div class="kt-notification__item-time">
                                        5 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-drop kt-font-info"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New user feedback received
                                    </div>
                                    <div class="kt-notification__item-time">
                                        8 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        System reboot has been successfully completed
                                    </div>
                                    <div class="kt-notification__item-time">
                                        12 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-favourite kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New order has been placed
                                    </div>
                                    <div class="kt-notification__item-time">
                                        15 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item kt-notification__item--read">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-safe kt-font-primary"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Company meeting canceled
                                    </div>
                                    <div class="kt-notification__item-time">
                                        19 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-psd kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New report has been received
                                    </div>
                                    <div class="kt-notification__item-time">
                                        23 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Finance report has been generated
                                    </div>
                                    <div class="kt-notification__item-time">
                                        25 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon-security kt-font-warning"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New er comment recieved
                                    </div>
                                    <div class="kt-notification__item-time">
                                        2 days ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-pie-chart kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New er is registered
                                    </div>
                                    <div class="kt-notification__item-time">
                                        3 days ago
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-psd kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New report has been received
                                    </div>
                                    <div class="kt-notification__item-time">
                                        23 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Finance report has been generated
                                    </div>
                                    <div class="kt-notification__item-time">
                                        25 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New order has been received
                                    </div>
                                    <div class="kt-notification__item-time">
                                        2 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New er is registered
                                    </div>
                                    <div class="kt-notification__item-time">
                                        3 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Application has been approved
                                    </div>
                                    <div class="kt-notification__item-time">
                                        3 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New file has been uploaded
                                    </div>
                                    <div class="kt-notification__item-time">
                                        5 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-drop kt-font-info"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New user feedback received
                                    </div>
                                    <div class="kt-notification__item-time">
                                        8 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        System reboot has been successfully completed
                                    </div>
                                    <div class="kt-notification__item-time">
                                        12 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-favourite kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New order has been placed
                                    </div>
                                    <div class="kt-notification__item-time">
                                        15 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item kt-notification__item--read">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-safe kt-font-primary"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Company meeting canceled
                                    </div>
                                    <div class="kt-notification__item-time">
                                        19 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-psd kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New report has been received
                                    </div>
                                    <div class="kt-notification__item-time">
                                        23 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        Finance report has been generated
                                    </div>
                                    <div class="kt-notification__item-time">
                                        25 hrs ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon-security kt-font-warning"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New er comment recieved
                                    </div>
                                    <div class="kt-notification__item-time">
                                        2 days ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-pie-chart kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        New er is registered
                                    </div>
                                    <div class="kt-notification__item-time">
                                        3 days ago
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                        <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
                            <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                                <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                    All caught up!
                                    <br>No new notifications.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
		</div>
	</div>
    <!--end: Notifications -->
    
	<!--begin: Cart -->
	<div class="kt-header__topbar-item dropdown">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
			<span class="kt-header__topbar-icon"><i class="fa fa-location-arrow"></i></span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
			<form>
                <!-- begin:: Mycart -->
                <div class="kt-mycart">
                            <div class="kt-mycart__head kt-head" style="background-image: url(./assets/media/misc/bg-1.jpg);">
                            <div class="kt-mycart__info">
                                <span class="kt-mycart__icon"><i class="flaticon2-shopping-cart-1 kt-font-success"></i></span>
                                <h3 class="kt-mycart__title">My Cart</h3>
                            </div> 
                            <div class="kt-mycart__button">
                                <button type="button" class="btn btn-success btn-sm" style=" ">2 Items</button>
                            </div>                
                        </div>        
                    
                    <div class="kt-mycart__body kt-scroll" data-scroll="true" data-height="245" data-mobile-height="200">
                        <div class="kt-mycart__item">
                            <div class="kt-mycart__container">
                                <div class="kt-mycart__info">
                                    <a href="#" class="kt-mycart__title">
                                        Samsung                      
                                    </a>
                                    <span class="kt-mycart__desc">
                                        Profile info, Timeline etc
                                    </span>

                                    <div class="kt-mycart__action">
                                        <span class="kt-mycart__price">$ 450</span>
                                        <span class="kt-mycart__text">for</span>
                                        <span class="kt-mycart__quantity">7</span>
                                        <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                        <a href="#" class="btn btn-label-success btn-icon">&plus;</a>
                                    </div>    
                                </div>
                                
                                <a href="#" class="kt-mycart__pic">
                                    <img src="./assets/media/products/product9.jpg" title="">
                                </a>    
                            </div>     			 
                        </div>

                        <div class="kt-mycart__item">
                            <div class="kt-mycart__container">
                                <div class="kt-mycart__info">
                                    <a href="#" class="kt-mycart__title">
                                        Panasonic                       
                                    </a>

                                    <span class="kt-mycart__desc">
                                        For PHoto & Others
                                    </span>

                                    <div class="kt-mycart__action">
                                        <span class="kt-mycart__price">$ 329</span>
                                        <span class="kt-mycart__text">for</span>
                                        <span class="kt-mycart__quantity">1</span>
                                        <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                        <a href="#" class="btn btn-label-success btn-icon">&plus;</a>                          
                                    </div>    
                                </div>
                                
                                <a href="#" class="kt-mycart__pic">
                                    <img src="./assets/media/products/product13.jpg" title="">
                                </a>     
                            </div>     			 
                        </div>    
                        
                        <div class="kt-mycart__item">
                            <div class="kt-mycart__container">
                                <div class="kt-mycart__info">
                                    <a href="#" class="kt-mycart__title">
                                        Fujifilm                       
                                    </a>
                                    <span class="kt-mycart__desc">
                                        Profile info, Timeline etc
                                    </span>

                                    <div class="kt-mycart__action">
                                        <span class="kt-mycart__price">$ 520</span>
                                        <span class="kt-mycart__text">for</span>
                                        <span class="kt-mycart__quantity">6</span>
                                        <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                        <a href="#" class="btn btn-label-success btn-icon">&plus;</a>
                                    </div>    
                                </div>
                                
                                <a href="#" class="kt-mycart__pic">
                                    <img src="./assets/media/products/product16.jpg" title="">
                                </a>    
                            </div>     			 
                        </div>

                        <div class="kt-mycart__item">
                            <div class="kt-mycart__container">
                                <div class="kt-mycart__info">
                                    <a href="#" class="kt-mycart__title">
                                        Candy Machine                      
                                    </a>

                                    <span class="kt-mycart__desc">
                                        For PHoto & Others
                                    </span>

                                    <div class="kt-mycart__action">
                                        <span class="kt-mycart__price">$ 784</span>
                                        <span class="kt-mycart__text">for</span>
                                        <span class="kt-mycart__quantity">4</span>
                                        <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                        <a href="#" class="btn btn-label-success btn-icon">&plus;</a>                       
                                    </div>    
                                </div>
                                
                                <a href="#" class="kt-mycart__pic">
                                    <img src="./assets/media/products/product15.jpg" title="" alt="">
                                </a>     
                            </div>     			 
                        </div>          
                    </div>

                    <div class="kt-mycart__footer">
                        <div class="kt-mycart__section">
                            <div class="kt-mycart__subtitel">
                                <span>Sub Total</span>
                                <span>Taxes</span>
                                <span>Total</span>                    
                            </div>  
                                    
                            <div class="kt-mycart__prices">
                                <span>$ 840.00</span> 
                                <span>$ 72.00</span> 
                                <span class="kt-font-brand">$ 912.00</span>
                            </div>  
                        </div>
                        <div class="kt-mycart__button kt-align-right">
                            <button type="button" class="btn btn-primary btn-sm">Place Order</button>
                        </div>
                    </div>
                </div>
                <!-- end:: Mycart -->            
            </form>
		</div>
	</div>
	<!--end: Cart-->

    <!--begin: Quick actions -->
    <div class="kt-header__topbar-item">
        <div class="kt-header__topbar-wrapper" >
            <button class="kt-header__topbar-icon btn-unstyled"
                    data-placement="bottom" 
                    data-toggle="kt-popover" 
                    data-trigger="focus"
                    data-html="true" 
                    data-content='
                        <a class="popover-link" href="#">
                            <i class="fa fa-user-circle font-neon-green font-size-md"></i>
                            My Details
                        </a>
                        <a class="popover-link" href="#">
                            <i class="fa fa-align-justify font-blue font-size-md" style=""></i>
                            My Actions
                        </a>
                        <a href="#" class="btn btn-logout">Logout</a>
                    '>
                <i class="flaticon2-gear"></i>
            </button>
        </div>
    </div>
    <!--end: Quick actions -->
        

        <!--begin: User bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,10px">
                <span class="kt-header__topbar-welcome kt-visible-desktop">Hi,</span>
                <span class="kt-header__topbar-username kt-visible-desktop">Nick</span>
                <img alt="Pic" src="./assets/media/users/300_21.jpg"/>
                <span class="kt-header__topbar-icon kt-bg-brand kt-font-lg kt-font-bold kt-font-light kt-hidden">S</span>
                <span class="kt-header__topbar-icon kt-hidden"><i class="flaticon2-user-outline-symbol"></i></span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                <!--begin: Head -->
        <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
            <div class="kt-user-card__avatar">
                <img class="kt-hidden-" alt="Pic" src="./assets/media/users/300_25.jpg" />
                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
            </div>
            <div class="kt-user-card__name">
                Sean Stone
            </div>
            <div class="kt-user-card__badge">
                <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
            </div>
        </div>
        <!--end: Head -->

        <!--begin: Navigation -->
        <div class="kt-notification">
            <a href="demo8/custom/apps/user/profile-1/personal-information.html" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-calendar-3 kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        My Profile
                    </div>
                    <div class="kt-notification__item-time">
                        Account settings and more
                    </div>
                </div>
            </a>
            <a href="demo8/custom/apps/user/profile-3.html" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-mail kt-font-warning"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        My Messages
                    </div>
                    <div class="kt-notification__item-time">
                        Inbox and tasks
                    </div>
                </div>
            </a>
            <a href="demo8/custom/apps/user/profile-2.html" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-rocket-1 kt-font-danger"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        My Activities
                    </div>
                    <div class="kt-notification__item-time">
                        Logs and notifications
                    </div>
                </div>
            </a>
            <a href="demo8/custom/apps/user/profile-3.html" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-hourglass kt-font-brand"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        My Tasks
                    </div>
                    <div class="kt-notification__item-time">
                        latest tasks and projects
                    </div>
                </div>
            </a>

            <a href="demo8/custom/apps/user/profile-1/overview.html" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-cardiogram kt-font-warning"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        Billing
                    </div>
                    <div class="kt-notification__item-time">
                        billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                    </div>
                </div>
            </a>
            <div class="kt-notification__custom kt-space-between">
                <a href="demo8/custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

                <a href="demo8/custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
            </div>
        </div>
        <!--end: Navigation -->
            </div>
        </div>
        <!--end: User bar -->
        
        <!--begin: Language bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--langs">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon">
                    <img class="" src="./assets/media/flags/012-uk.svg" alt="" />
                </span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
                <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                    <li class="kt-nav__item kt-nav__item--active">
                        <a href="#" class="kt-nav__link">
                            <span class="kt-nav__link-icon"><img src="./assets/media/flags/020-flag.svg" alt="" /></span>
                            <span class="kt-nav__link-text">English</span>
                        </a>
                    </li>
                    <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                            <span class="kt-nav__link-icon"><img src="./assets/media/flags/016-spain.svg" alt="" /></span>
                            <span class="kt-nav__link-text">Spanish</span>
                        </a>
                    </li>
                    <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                            <span class="kt-nav__link-icon"><img src="./assets/media/flags/017-germany.svg" alt="" /></span>
                            <span class="kt-nav__link-text">German</span>
                        </a>
                    </li>
                </ul>		
            </div>
        </div>
        <!--end: Language bar -->

    </div>
    <!--end: Quick actions -->

	</div>
</div>
<!-- end:: Header Topbar -->
<!-- end:: Header -->