<!-- Accordion -->
<!--begin::Portlet-->
<div class="kt-portlet--spacer bg-light-gray "> 

    <!-- begin::Task Details accordion -->
    <?php include('accordion-sections/acc.task-details.php') ?>
    <!-- end::Task details accordion -->

    <!-- begin::Substance Information accordion -->
    <?php include('accordion-sections/acc.substance-information.php') ?>
    <!-- end::Substance Information accordion -->

    <!--begin::Task Hazards & Controls-->
    <?php include('accordion-sections/acc.task-hazards.php') ?>
    <!--end::Task Hazards & Controls-->

    <div class="accordion task-hazards ra-accordion accordion-light accordion-toggle-arrow mb-4" 
    data-status="not-started" 
    data-origin-status="not-started">
        <div class="card risk_accord">
            <div class="card-header" id="generalControls">
                <div class="card-title collapsed" data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="collapseOne2">
                    <span class="accordion-status"></span> General Controls
                </div>
            </div>
        </div>
    </div>
    <div class="accordion task-hazards ra-accordion accordion-light accordion-toggle-arrow mb-4" 
    data-status="not-started" 
    data-origin-status="not-started">
        <div class="card risk_accord">
            <div class="card-header" id="healthSurveillance">
                <div class="card-title collapsed" data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="collapseOne2">
                    <span class="accordion-status"></span> Health Surveillance
                </div>
            </div>
        </div>
    </div>
    <div class="accordion task-hazards ra-accordion accordion-light accordion-toggle-arrow mb-4" 
    data-status="not-started" 
    data-origin-status="not-started">
        <div class="card risk_accord">
            <div class="card-header" id="healthSurveillance">
                <div class="card-title collapsed" data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="collapseOne2">
                    <span class="accordion-status"></span> Action Management
                </div>
            </div>
        </div>
    </div>
    <div class="accordion task-hazards ra-accordion accordion-light accordion-toggle-arrow mb-4" 
    data-status="not-started" 
    data-origin-status="not-started">
        <div class="card risk_accord">
            <div class="card-header" id="linkedDocuments">
                <div class="card-title collapsed" data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="collapseOne2">
                    <span class="accordion-status"></span> Linked Documents
                </div>
            </div>
        </div>
    </div>
    <div class="accordion task-hazards ra-accordion accordion-light accordion-toggle-arrow mb-4" 
    data-status="not-started" 
    data-origin-status="not-started">
        <div class="card risk_accord">
            <div class="card-header" id="reviewAndPublish">
                <div class="card-title collapsed" data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="collapseOne2">
                    <span class="accordion-status"></span> Review & Publish
                </div>
            </div>
        </div>
    </div>
</div>

		<!--end::Portlet-->
<!-- End Accordion -->