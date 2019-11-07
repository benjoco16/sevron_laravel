<!--  Box List 1 -->
<div class="col-xl-4 col-md-6 order-lg-1 order-xl-1 "> 
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <p class="font-ash d-flex bold align-items-center w-100 font-weight-500 mb-0 pr-3">
                    <img src="./assets/media/dashboard/chart-pie.svg" class="mr-2" width="15" alt=""> 
                    Performance Summary
                </p>
            </div>
        </div>

        <div class="kt-portlet__body">
            <div class="gauge_body">
                <h2 class="bold font-ash">0%</h2>
                <div id="hdc-container" class="half-pie"></div>
                <div class="d-flex align-items-center">
                    <div class="mr-4 font-ash ml-3">
                        <p class="dashboard-min-label">
                            <small>
                                <span class="" title="Total">Total</span>
                            </small>
                        </p>
                        <h1 class="font-weight-bold mb-0 font-ash text-left">
                            2
                        </h1>
                    </div>
                    <div class="mr-3 font-ash ml-3">
                        <p class="dashboard-min-label">
                            <small>
                                <span class="" title="Advisory">Target</span>
                            </small>
                        </p>
                        <h1 class="font-weight-bold mb-0 font-ash text-left">
                            0
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1 "> 
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <p class="font-ash bold d-flex align-items-center w-100 font-weight-500 mb-0 pr-3">
                    <img src="./assets/media/dashboard/chart-bar.svg" class="mr-2" width="13" alt="">
                    12 Month Rolling Rates
                </p>

                <div class="kt-portlet__head-toolbar d-flex align-items-center font-ash sm_switched">
                    <span>Direct &nbsp;</span> 
                    <span class="kt-switch kt-switch--sm">
                        <label>
                            <input type="checkbox" checked="checked" name="">
                            <span></span>
                        </label>
                    </span>
                    <span>&nbsp; All</span>
                </div>
            </div>
        </div>

        <div class="kt-portlet__body pb-0">
            <div id="rlc-container"></div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-md-6 order-lg-1 order-xl-1 "> 
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <p class="font-ash d-flex align-items-center bold w-100 font-weight-500 mb-0 pr-3">
                   <img src="./assets/media/dashboard/clipboard.svg" class="mr-2" width="13" alt=""> 
                   RIDDOR Summary
                </p>
            </div>
        </div>

        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label rsum">
                <div class="kt-widget3__item pt-4">
                    <div class="kt-widget3__body">
                        <p class="kt-widget3__text font-weight-500 font-ash"> 
                            LONGEST NUMBER OF DAYS WITHOUT A RIDDOR
                        </p>
                        <h2 class="bold"><img src="assets/media/dashboard/king.png"/> 2019</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label rsum">
                <div class="kt-widget3__item pt-4">
                    
                    <div class="kt-widget3__body">
                        <p class="kt-widget3__text font-weight-500 font-ash"> 
                            CURRENT NUMBER OF DAYS WITHOUT RIDDOR
                        </p>
                        <h2 class="bold"><img src="assets/media/dashboard/clock.png"/> 823</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
