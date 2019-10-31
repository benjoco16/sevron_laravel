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
    <?php include('./global/head.php') ?>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >
        <!-- begin:: Page -->
        <!-- begin:: Header -->
        <?php include('./global/header.php') ?>
        <!-- end:: Header -->
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
            <div class="kt-header__brand-nav">
                    <div class="dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Dashboard Options
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
            <!-- End Dashboard Options Button -->
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                    <a href="#">
                        <button type="button" class="btn btn-danger">User Guide</button>
                        <i class="fad fa-graduation-cap"></i>
                    </a>
                
                <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-icon"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000"/>
    </g>
</svg>                        <!--<i class="flaticon2-plus"></i>-->
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                        <!--begin::Nav-->
                        <ul class="kt-nav">
                            <li class="kt-nav__head">
                                Add anything or jump to:
                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                            </li>
                            <li class="kt-nav__separator"></li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-drop"></i>
                                    <span class="kt-nav__link-text">Order</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                    <span class="kt-nav__link-text">Ticket</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                    <span class="kt-nav__link-text">Goal</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                    <span class="kt-nav__link-text">Support Case</span>
                                    <span class="kt-nav__link-badge">
                                        <span class="kt-badge kt-badge--success">5</span>
                                    </span>
                                </a>
                            </li>
                            <li class="kt-nav__separator"></li>
                            <li class="kt-nav__foot">
                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                            </li>
                        </ul>
                        <!--end::Nav-->
                    </div>
                </div>
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
                            <h2>How Compliant is your supply chain?</h2>
                            <div class="score_hldr">85.5%</div>
                            
                            <div class="top_list">
                                <h4>Top 3 Ways To Improve Your Score...</h4>
                                <ul>
                                    <li> <span class="kt-badge kt-badge--red kt-badge--dot"></span>  Review Critical Sds <strong>Update +100PTS</strong></li>
                                    <li> <span class="kt-badge kt-badge--yellow kt-badge--dot"></span>  Clear Overue Actions <strong>+18 PTS</strong></li>
                                    <li> <span class="kt-badge kt-badge--yellow kt-badge--dot"></span>  Add Missing Environmental <strong>Controls +16PTS</strong></li>
                                </ul>
                                <div class="ban_bt">
                                    <button type="button" data-toggle="modal" href="#large" class="btn btn-secondary btn-lg bt-color-gray">View All</button> <span>Your Ccompliance scode has not <br> change since: Aug 26, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 image_dashboard">
                        <img src="./assets/media/dashboard/banner_scored2.jpg" alt=""/>
                    </div>
                </div>
            </div>
            
            <!-- End Banner Section -->
            
           
            
        </div>
        
        <!--End::Row-->	

        <div class="second_section_dashboard_2"> 
            <div class="row">
             <?php include ('template/dashboard2/second_section_d2.php'); ?>
            </div>
        </div>

        <div class="second_section"> 
            <div class="row">
             <?php include ('list_box.php'); ?>
            </div>
        </div>
        
        <div class="third_section">
            <!--Begin::Row-->
            <div class="row">
             <?php include ('third_section.php'); ?>
            </div>
            <!--End::Row-->
        </div>
        
        <div class="fourth_section">
            <!--Begin::Row-->
            <div class="row">
             <?php include ('fourth-section.php'); ?>
            </div>
            <!--End::Row-->
        </div>

        <div class="fifth_section">
            <!--Begin::Row-->
            <div class="row">
             <?php include ('fifth-section.php'); ?>
            </div>
            <!--End::Row-->
        </div>
        
        <!-- modal -->
        <?php include('template/home_modal.php')?>
        <!-- end modal -->
<!--Begin::Row-->
<div class="row">
	<div class="col-xl-6 col-lg-12 order-lg-1 order-xl-1">
		<!--begin:: Widgets/Sale Reports-->
<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Sales Reports
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
					Last Month
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
					All Time
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="kt-portlet__body">
		<!--Begin::Tab Content-->
		<div class="tab-content">
			<!--begin::tab 1 content-->
			<div class="tab-pane active" id="kt_widget11_tab1_content">
				<!--begin::Widget 11--> 
				<div class="kt-widget11">
					<div class="table-responsive">					 
						<table class="table">
							<thead>
								<tr>
									<td style="width:1%">#</td>
									<td style="width:40%">Application</td>
									<td style="width:14%">Sales</td>
									<td style="width:15%">Change</td>
									<td style="width:15%">Status</td>
									<td style="width:15%" class="kt-align-right">Total</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single">
										<input type="checkbox"><span></span>
										</label>
									</td>
									<td>
										<a href="#" class="kt-widget11__title">Loop</a>
										<span class="kt-widget11__sub">CRM System</span>
									</td>
									<td>19,200</td>
									<td>$63</td>
									<td><span class="kt-badge kt-badge--inline kt-badge--brand">new</span></td>
									<td class="kt-align-right kt-font-brand kt-font-bold">$34,740</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<a href="#" class="kt-widget11__title">Selto</a>
										<span class="kt-widget11__sub">Powerful Website Builder</span>
									</td>
									<td>24,310</td>
									<td>$39</td>
									<td><span class="kt-badge kt-badge--inline kt-badge--success">approved</span></td>
									<td class="kt-align-right kt-font-brand kt-font-bold">$46,010</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<a href="#" class="kt-widget11__title">Jippo</a>
										<span class="kt-widget11__sub">The Best Selling App</span>
									</td>
									<td>9,076</td>
									<td>$105</td>
									<td><span class="kt-badge kt-badge--inline kt-badge--warning">pending</span></td>
									<td class="kt-align-right kt-font-brand kt-font-bold">$67,800</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<a href="#" class="kt-widget11__title">Verto</a>
										<span class="kt-widget11__sub">Web Development Tool</span>
									</td>
									<td>11,094</td>
									<td>$16</td>
									<td><span class="kt-badge kt-badge--inline kt-badge--danger">on hold</span></td>
									<td class="kt-align-right kt-font-brand kt-font-bold">$18,520</td>
								</tr>
							</tbody>									     
						</table>
					</div>
					<div class="kt-widget11__action kt-align-right">
						<button type="button" class="btn btn-label-brand btn-bold btn-sm">Import Report</button>
					</div>
				</div>
				<!--end::Widget 11--> 						             
			</div>
			<!--end::tab 1 content-->

			<!--begin::tab 2 content-->
			<div class="tab-pane" id="kt_widget11_tab2_content">
				<!--begin::Widget 11--> 
				<div class="kt-widget11">
					<div class="table-responsive">					 
						<table class="table">
							<thead>
								<tr>
									<td style="width:1%">#</td>
									<td style="width:40%">Application</td>
									<td style="width:14%">Sales</td>
									<td style="width:15%">Change</td>
									<td style="width:15%">Status</td>
									<td style="width:15%" class="kt-align-right">Total</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single">
										<input type="checkbox"><span></span>
										</label>
									</td>
									<td>
										<span class="kt-widget11__title">Loop</span>
										<span class="kt-widget11__sub">CRM System</span>
									</td>
									<td>19,200</td>
									<td>$63</td>
									<td><span class="kt-badge kt-badge--inline kt-badge--danger">pending</span></td>
									<td class="kt-align-right kt-font-brand  kt-font-bold">$23,740</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="kt-widget11__title">Selto</span>
										<span class="kt-widget11__sub">Powerful Website Builder</span>
									</td>
									<td>24,310</td>
									<td>$39</td>
									<td><span class="kt-badge kt-badge--inline kt-badge--success">new</span></td>
									<td class="kt-align-right kt-font-success  kt-font-bold">$46,010</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="kt-widget11__title">Jippo</span>
										<span class="kt-widget11__sub">The Best Selling App</span>
									</td>
									<td>9,076</td>
									<td>$105</td>
									<td><span class="kt-badge kt-badge--inline kt-badge--brand">approved</span></td>
									<td class="kt-align-right kt-font-danger kt-font-bold">$15,800</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="kt-widget11__title">Verto</span>
										<span class="kt-widget11__sub">Web Development Tool</span>
									</td>
									<td>11,094</td>
									<td>$16</td>
									<td><span class="kt-badge kt-badge--inline kt-badge--info">done</span></td>
									<td class="kt-align-right kt-font-warning kt-font-bold">$8,520</td>
								</tr>
							</tbody>									     
						</table>
					</div>
					<div class="kt-widget11__action kt-align-right">
						<button type="button" class="btn btn-label-success btn-bold btn-sm">Generate Report</button>
					</div>
				</div>
				<!--end::Widget 11-->       
			</div>
			<!--end::tab 2 content-->
			<!--begin::tab 3 content-->
			<div class="tab-pane" id="kt_widget11_tab3_content">
				
			</div>
			<!--end::tab 3 content-->
		</div>
		<!--End::Tab Content-->
	</div>
</div>
<!--end:: Widgets/Sale Reports-->
	</div>
	<div class="col-xl-6 col-lg-6 order-lg-1 order-xl-1">
		<!--Begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Recent Activities
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="dropdown dropdown-inline">
				<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="flaticon-more-1"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                    <!--begin::Nav-->
<ul class="kt-nav">
    <li class="kt-nav__head">
        Export Options                                    
        <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
    </g>
</svg>        </span>
   </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Activity</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">FAQ</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-new-email"></i>
            <span class="kt-nav__link-text">Support</span>
            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
            </span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
    </li>
</ul>
<!--end::Nav-->				</div>
			</div>
		</div>
	</div>
	<div class="kt-portlet__body">
			<!--Begin::Timeline 3 -->
			<div class="kt-timeline-v2">
				<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">10:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-danger"></i>
						</div>
						<div class="kt-timeline-v2__item-text  kt-padding-top-5">
							Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
							incididunt ut labore et dolore magna                                           	                                	               
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">12:45</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-success"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
							AEOL Meeting With 
						</div>
						<div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">
							<a href="#"><img src="./assets/media/users/100_4.jpg" title=""></a>
							<a href="#"><img src="./assets/media/users/100_13.jpg" title=""></a>
							<a href="#"><img src="./assets/media/users/100_11.jpg" title=""></a>
							<a href="#"><img src="./assets/media/users/100_14.jpg" title=""></a>
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">14:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-brand"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							Make Deposit <a href="#" class="kt-link kt-link--brand kt-font-bolder">USD 700</a> To ESL.
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">16:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-warning"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
							incididunt ut labore et dolore magna elit enim at minim<br>
							veniam quis nostrud                                                            	                                
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">17:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-info"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							Placed a new order in <a href="#" class="kt-link kt-link--brand kt-font-bolder">SIGNATURE MOBILE</a> marketplace.
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">16:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-brand"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
							incididunt ut labore et dolore magna elit enim at minim<br>
							veniam quis nostrud                                                            	                                
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">17:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-danger"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							Received a new feedback on <a href="#" class="kt-link kt-link--brand kt-font-bolder">FinancePro App</a> product.
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">15:30</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-danger"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							New notification message has been received on <a href="#" class="kt-link kt-link--brand kt-font-bolder">LoopFin Pro</a> product.
						</div>
					</div>
				</div>
			</div>
			<!--End::Timeline 3 -->
	</div>
</div>
<!--End::Portlet-->	</div>    
	
	<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
		<!--begin:: Widgets/Sales Stats-->
<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
	<div class="kt-portlet__head kt-portlet__head--noborder">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Sales Stats
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="dropdown dropdown-inline">
				<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="flaticon-more-1"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-right">
                    <ul class="kt-nav">
    <li class="kt-nav__section kt-nav__section--first">
        <span class="kt-nav__section-text">Finance</span>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-graph-1"></i>
            <span class="kt-nav__link-text">Statistics</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
            <span class="kt-nav__link-text">Events</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-layers-1"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__section">
        <span class="kt-nav__section-text">ers</span>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
            <span class="kt-nav__link-text">Notifications</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-file-1"></i>
            <span class="kt-nav__link-text">Files</span>
        </a>
    </li>
</ul>				</div>
			</div>
		</div>
	</div>
	<div class="kt-portlet__body">
		<!--begin::Widget 6-->
		<div class="kt-widget15">
			<div class="kt-widget15__chart">
				<canvas id="kt_chart_sales_stats" style="height:160px;"></canvas>
			</div>
			<div class="kt-widget15__items kt-margin-t-40">
				<div class="row">
					<div class="col">
						<div class="kt-widget15__item">
							<span class="kt-widget15__stats">
							63%
							</span>
							<span class="kt-widget15__text">
							Sales Grow
							</span>				                	 
							<div class="kt-space-10"></div>
							<div class="progress kt-widget15__chart-progress--sm">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="kt-widget15__item">
							<span class="kt-widget15__stats">
							54%
							</span>
							<span class="kt-widget15__text">
							Orders Grow
							</span>		
							<div class="kt-space-10"></div>
							<div class="progress kt-progress--sm">
								<div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="kt-widget15__item">
							<span class="kt-widget15__stats">
							41%
							</span>
							<span class="kt-widget15__text">
							Profit Grow
							</span>		
							<div class="kt-space-10"></div>
							<div class="progress kt-progress--sm">
								<div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="kt-widget15__item">
							<span class="kt-widget15__stats">
							79%
							</span>
							<span class="kt-widget15__text">
							Member Grow
							</span>		
							<div class="kt-space-10"></div>
							<div class="progress kt-progress--sm">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="kt-widget15__desc">
							* lorem ipsum dolor sit amet consectetuer sediat elit
						</div>
					</div>
				</div>
			</div>			
		</div>
		<!--end::Widget 6-->
	</div>
</div>
<!--end:: Widgets/Sales Stats-->	
</div>
	<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
		<!--begin:: Widgets/Top Locations-->
        <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Top Locations
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="dropdown dropdown-inline">
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-more-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
            <li class="kt-nav__section kt-nav__section--first">
                <span class="kt-nav__section-text">Finance</span>
            </li>
            <li class="kt-nav__item">
                <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                    <span class="kt-nav__link-text">Statistics</span>
                </a>
            </li>
            <li class="kt-nav__item">
                <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                    <span class="kt-nav__link-text">Events</span>
                </a>
            </li>
            <li class="kt-nav__item">
                <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                    <span class="kt-nav__link-text">Reports</span>
                </a>
            </li>
            <li class="kt-nav__section">
                <span class="kt-nav__section-text">ers</span>
            </li>
            <li class="kt-nav__item">
                <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                    <span class="kt-nav__link-text">Notifications</span>
                </a>
            </li>
            <li class="kt-nav__item">
                <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-file-1"></i>
                    <span class="kt-nav__link-text">Files</span>
                </a>
            </li>
        </ul>				</div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="kt-widget15">
                    <div class="kt-widget15__map">
                        <div id="kt_chart_latest_trends_map" style="height:320px;"></div>
                    </div>
                    <div class="kt-widget15__items kt-margin-t-30">
                        <div class="row">
                            <div class="col">
                                <!--begin::widget item-->
                                <div class="kt-widget15__item">
                                    <span class="kt-widget15__stats">
                                    63%
                                    </span>
                                    <span class="kt-widget15__text">
                                    London
                                    </span>				                	 
                                    <div class="kt-space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::widget item-->
                            </div>
                            <div class="col">
                                <!--begin::widget item-->
                                <div class="kt-widget15__item">
                                    <span class="kt-widget15__stats">
                                    54%
                                    </span>
                                    <span class="kt-widget15__text">
                                    Glasgow
                                    </span>		
                                    <div class="kt-space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::widget item-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <!--begin::widget item-->
                                <div class="kt-widget15__item">
                                    <span class="kt-widget15__stats">
                                    41%
                                    </span>
                                    <span class="kt-widget15__text">
                                    Dublin
                                    </span>		
                                    <div class="kt-space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::widget item-->
                            </div>
                            <div class="col">
                                <!--begin::widget item-->
                                <div class="kt-widget15__item">
                                    <span class="kt-widget15__stats">
                                    79%
                                    </span>
                                    <span class="kt-widget15__text">
                                    Edinburgh
                                    </span>		
                                    <div class="kt-space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!--end::widget item-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end:: Widgets/Top Locations-->	
</div>	
	<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
		<!--begin:: Widgets/Trends-->
<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
	<div class="kt-portlet__head kt-portlet__head--noborder">
		<div class="kt-portlet__head-label">
		   <h3 class="kt-portlet__head-title">
	            Trends
	       </h3>
		</div>
		<div class="kt-portlet__head-toolbar">
		    <div class="dropdown dropdown-inline">
		        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="flaticon-more-1"></i>
		        </button>
		        <div class="dropdown-menu dropdown-menu-right">
		        	<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>		        </div>
		    </div>
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
		<div class="kt-widget4 kt-widget4--sticky">
			<div class="kt-widget4__chart">
				<canvas id="kt_chart_trends_stats" style="height: 240px;"></canvas>
			</div>
			<div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
				<div class="kt-widget4__item">
					<div class="kt-widget4__img kt-widget4__img--logo">
						<img src="./assets/media/client-logos/logo3.png" alt="">
					</div>
					<div class="kt-widget4__info">
						<a href="#" class="kt-widget4__title">
							Phyton  
						</a>	
						<span class="kt-widget4__sub">
						A Programming Language
						</span>		 
					</div>
					<span class="kt-widget4__ext">
						<span class="kt-widget4__number kt-font-danger">+$17</span>
					</span>	
				</div>
				<div class="kt-widget4__item">
					<div class="kt-widget4__img kt-widget4__img--logo">
						<img src="./assets/media/client-logos/logo1.png" alt="">
					</div>
					<div class="kt-widget4__info">
						<a href="#" class="kt-widget4__title">
							FlyThemes  
						</a> 
						<span class="kt-widget4__sub">
						A Let's Fly Fast Again Language
						</span>		 
					</div>
					<span class="kt-widget4__ext">
						<span class="kt-widget4__number kt-font-danger">+$300</span>
					</span>	
				</div>
				<div class="kt-widget4__item">
					<div class="kt-widget4__img kt-widget4__img--logo">
						<img src="./assets/media/client-logos/logo2.png" alt="">
					</div>
					<div class="kt-widget4__info">
						<a href="#" class="kt-widget4__title">
							AirApp  
						</a> 
						<span class="kt-widget4__sub">
							Awesome App For Project Management
						</span>		 
					</div>
					<span class="kt-widget4__ext">
						<span class="kt-widget4__number kt-font-danger">+$6700</span>
					</span>	
				</div>
			</div>			
		</div>				 
	</div>
</div>
<!--end:: Widgets/Trends-->	</div>
</div>
<!--End::Row-->	

<!--Begin::Row-->
<div class="row">
	<div class="col-xl-12">
		<div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
	<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Exclusive Datatable Plugin
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="dropdown dropdown-inline">
				<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="flaticon-more-1"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">
                    <!--begin::Nav-->
<ul class="kt-nav">
    <li class="kt-nav__head">
        Export Options                                    
        <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
    </g>
</svg>        </span>
   </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Activity</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">FAQ</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-new-email"></i>
            <span class="kt-nav__link-text">Support</span>
            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
            </span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
    </li>
</ul>
<!--end::Nav-->				</div>
			</div>
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fit">
		<!--begin: Datatable -->
		<div class="kt-datatable" id="kt_datatable_latest_orders"></div>
		<!--end: Datatable -->
	</div>
</div>	</div>	
</div>
<!--End::Row-->

<!--Begin::Row-->
<div class="row">
	<div class="col-xl-6">
		<!--begin:: Widgets/Application Sales-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Application Sales
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
					Last Month
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
					All Time
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="kt_widget11_tab1_content">
				<!--begin::Widget 11--> 
				<div class="kt-widget11">
					<div class="table-responsive">					 
						<table class="table">
							<thead>
								<tr>
									<td style=" width: 1%;"></td>
									<td style=" width: 20%;">Application</td>
									<td style=" width: 10%;">Sales</td>
									<td style=" width: 20%;">Change</td>
									<td style=" width: 10%;">Status</td>
									<td style=" width: 10%;" class="kt-align-right">Total</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single">
										<input type="checkbox"><span></span>
										</label>
									</td>
									<td>
										<span class="kt-widget11__title">Vertex 2.0</span>
										<span class="kt-widget11__sub">Vertex To By Again</span>
									</td>
									<td>19,200</td>
									<td>
										<div class="kt-widget11__chart" style="height:50px; width: 100px">
											<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
											<canvas id="kt_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
										</div>
									</td>
									<td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
									<td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="kt-widget11__title">Metronic</span>
										<span class="kt-widget11__sub">Powerful Admin Theme</span>
									</td>
									<td>24,310</td>
									<td>
										<div class="kt-widget11__chart" style="height:50px; width: 100px">
											<canvas id="kt_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
										</div>
									</td>
									<td>
										<span class="kt-badge kt-badge--success kt-badge--inline">pending</span>
									</td>
									<td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="kt-widget11__title">Apex</span>
										<span class="kt-widget11__sub">The Best Selling App</span>
									</td>
									<td>9,076</td>
									<td>
										<div class="kt-widget11__chart" style="height:50px; width: 100px">
											<canvas id="kt_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
										</div>
									</td>
									<td>
										<span class="kt-badge kt-badge--brand kt-badge--inline">new</span>
									</td>
									<td class="kt-align-right kt-font-brand kt-font-bold">$37,200</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="kt-widget11__title">Cascades</span>
										<span class="kt-widget11__sub">Design Tool</span>
									</td>
									<td>11,094</td>
									<td>
										<div class="kt-widget11__chart" style="height:50px; width: 100px">
											<canvas id="kt_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
										</div>
									</td>
									<td>
										<span class="kt-badge kt-badge--warning kt-badge--inline">new</span>
									</td>
									<td class="kt-align-right kt-font-brand kt-font-bold">$8,520</td>
								</tr>
							</tbody>									     
						</table>
					</div>
					<div class="kt-widget11__action kt-align-right">
						<button type="button" class="btn btn-label-success btn-sm btn-bold">View All Records</button>
					</div>
				</div>
				<!--end::Widget 11--> 						             
			</div>
			<div class="tab-pane" id="kt_widget11_tab2_content">
				<!--begin::Widget 11--> 
				<div class="kt-widget11">
					<div class="table-responsive">					 
						<table class="table">
							<thead>
								<tr>
									<td style=" width: 1%;"></td>
									<td style=" width: 20%;">Application</td>
									<td style=" width: 10%;">Sales</td>
									<td style=" width: 20%;">Change</td>
									<td style=" width: 10%;">Status</td>
									<td style=" width: 10%;" class="kt-align-right">Total</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single">
										<input type="checkbox"><span></span>
										</label>
									</td>
									<td>
										<span class="kt-widget11__title">Loop</span>
										<span class="kt-widget11__sub">CRM System</span>
									</td>
									<td>19,200</td>
									<td>
										<div class="kt-widget11__chart" style="height:50px; width: 100px">
											<canvas id="kt_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
										</div>
									</td>
									<td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
									<td class="kt-align-right kt-font-brand">$34,740</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="kt-widget11__title">Selto</span>
										<span class="kt-widget11__sub">Powerful Website Builder</span>
									</td>
									<td>24,310</td>
									<td>
										<div class="kt-widget11__chart" style="height:50px; width: 100px">
											<canvas id="kt_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
										</div>
									</td>
									<td><span class="kt-badge kt-badge--success kt-badge--inline">new</span></td>
									<td class="kt-align-right kt-font-brand">$46,010</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="kt-widget11__title">Jippo</span>
										<span class="kt-widget11__sub">The Best Selling App</span>
									</td>
									<td>9,076</td>
									<td>
										<div class="kt-widget11__chart" style="height:50px; width: 100px">
											<canvas id="kt_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
										</div>
									</td>
									<td><span class="kt-badge kt-badge--brand kt-badge--inline">approved</span></td>
									<td class="kt-align-right kt-font-brand">$67,800</td>
								</tr>
								<tr>
									<td>
										<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
									</td>
									<td>
										<span class="kt-widget11__title">Verto</span>
										<span class="kt-widget11__sub">Web Development Tool</span>
									</td>
									<td>11,094</td>
									<td>
										<div class="kt-widget11__chart" style="height:50px; width: 100px">
											<canvas id="kt_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
										</div>
									</td>
									<td><span class="kt-badge kt-badge--danger kt-badge--inline">pending</span></td>
									<td class="kt-align-right kt-font-brand">$18,520</td>
								</tr>
							</tbody>									     
						</table>
					</div>
					<div class="kt-widget11__action kt-align-right">
						<button type="button" class="btn btn-outline-brand btn-bold">View All Records</button>
					</div>
				</div>
				<!--end::Widget 11-->       
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/Application Sales-->	</div>
	<div class="col-xl-6">
		<!--begin:: Widgets/Latest Updates-->
<div class="kt-portlet kt-portlet--height-fluid ">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Latest Updates
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
				Today
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                <!--begin::Nav-->
<ul class="kt-nav">
    <li class="kt-nav__head">
        Export Options                                    
        <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
    </g>
</svg>        </span>
   </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Activity</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">FAQ</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-new-email"></i>
            <span class="kt-nav__link-text">Support</span>
            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
            </span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
    </li>
</ul>
<!--end::Nav-->			</div>
		</div>
	</div>
	<!--full height portlet body-->
	<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
		<div class="kt-widget4 kt-widget4--sticky">
			<div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15">
				<div class="kt-widget4__item">
					<span class="kt-widget4__icon">
						<i class="flaticon2-graphic  kt-font-brand"></i>
					</span>	
					<a href="#" class="kt-widget4__title">
						Metronic Admin Theme
					</a> 		
					<span class="kt-widget4__number kt-font-brand">+500</span>
				</div>			
				<div class="kt-widget4__item">
					<span class="kt-widget4__icon">
						<i class="flaticon2-analytics-2  kt-font-success"></i>
					</span>	
					<a href="#" class="kt-widget4__title">
						Green Maker Team
					</a> 		
					<span class="kt-widget4__number kt-font-success">-64</span>
				</div>
				<div class="kt-widget4__item">
					<span class="kt-widget4__icon">
						<i class="flaticon2-drop  kt-font-danger"></i>
					</span>	
					<a href="#" class="kt-widget4__title">
						Make Apex Development
					</a> 		
					<span class="kt-widget4__number kt-font-danger">+1080</span>
				</div>
				<div class="kt-widget4__item">
					<span class="kt-widget4__icon">
						<i class="flaticon2-pie-chart-4 kt-font-warning"></i>
					</span>	
					<a href="#" class="kt-widget4__title">
						A Programming Language
					</a> 		
					<span class="kt-widget4__number kt-font-warning">+19</span>
				</div>
			</div>
			<div class="kt-widget4__chart kt-margin-t-15">
				<canvas id="kt_chart_latest_updates" style="height: 150px;"></canvas>
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/Latest Updates-->         
	</div>
</div>
<!--End::Row-->
<!--End::Dashboard 4-->	
</div>
<!-- end:: Content -->

							</div>
						</div>
									</div>

									<!-- begin:: Footer -->
<div class="kt-footer kt-grid__item" id="kt_footer">	
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-footer__wrapper">
			<div class="kt-footer__copyright">
				2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
			</div>
			<div class="kt-footer__menu">
				<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">About</a>
				<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Team</a>
				<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Contact</a>
			</div>
		</div>
	</div>		
</div>
<!-- end:: Footer -->							</div>
		</div>
	</div>
	
<!-- end:: Page -->

            <!-- begin::Quick Panel -->
<div id="kt_quick_panel" class="kt-quick-panel">
    <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>

    <div class="kt-quick-panel__nav">
        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
            </li>
        </ul>
    </div>

    <div class="kt-quick-panel__content">
        <div class="tab-content">
            <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                <div class="kt-notification">
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
                            <i class="flaticon2-pie-chart kt-font-warning"></i>
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
            <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                <div class="kt-notification-v2">
                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-bell kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                5 new user generated report
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Reports based on sales
                            </div>
                        </div>
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-box kt-font-danger"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                2 new items submited
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                by Grog John
                            </div>
                        </div>
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-psd kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                79 PSD files generated
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Reports based on sales
                            </div>
                        </div>
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-supermarket kt-font-warning"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                $2900 worth producucts sold
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Total 234 items
                            </div>
                        </div>
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon-paper-plane-1 kt-font-success"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                4.5h-avarage response time
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-information kt-font-danger"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                Database server is down
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                10 mins ago
                            </div>
                        </div>
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-mail-1 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                System report has been generated
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>

                    <a href="#" class="kt-notification-v2__item">
                        <div class="kt-notification-v2__item-icon">
                            <i class="flaticon2-hangouts-logo kt-font-warning"></i>
                        </div>
                        <div class="kt-notification-v2__itek-wrapper">
                            <div class="kt-notification-v2__item-title">
                                4.5h-avarage response time
                            </div>
                            <div class="kt-notification-v2__item-desc">
                                Fostest is Barry
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
                <form class="kt-form">
                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">er Care</div>

                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Notifications:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--success kt-switch--sm">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Case Tracking:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--success kt-switch--sm">
								<label>
									<input type="checkbox"  name="quick_panel_notifications_2">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Support Portal:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--success kt-switch--sm">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>

                    <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>

                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>

                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Generate Reports:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--danger">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Report Export:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--danger">
								<label>
									<input type="checkbox"  name="quick_panel_notifications_3">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Allow Data Collection:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--danger">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>

                    <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>

                    <div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>

                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable Member singup:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--brand">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--brand">
								<label>
									<input type="checkbox"  name="quick_panel_notifications_5">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Enable er Portal:</label>
                        <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--brand">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
									<span></span>
                            </label>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--begin::Page Scripts -->
<?php include('./global/vendors.php') ?>
<!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>
