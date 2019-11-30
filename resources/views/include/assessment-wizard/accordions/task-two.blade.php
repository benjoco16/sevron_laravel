<div class="accordion accordion-light ra-accordion accordion-toggle-arrow mb-4" data-status="category" id="accordionExample2">
    <div class="card risk-assessment">
        <div class="card-header" id="headingOne2">
            <div class="card-title collapsed" data-toggle="collapse" data-target="#task2" aria-expanded="false" aria-controls="collapseOne2">
                <span class="accordion-draggable">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                </span>
                <span class="accordion-status">Task Two</span> Cleaning floor in order of sequence
            </div>
        </div>
        <div id="task2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample2">
            @include('include.assessment-wizard.accordions.task-two-sub-1')
            @include('include.assessment-wizard.accordions.task-two-sub-2')
            @include('include.assessment-wizard.accordions.task-two-sub-3')
        </div>
    </div>
</div>