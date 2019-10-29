<div class="modal fade" id="modalRiskAssessment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Find the substance for your COSHH Assessment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                
                <ul class="as-wizard row">
                    <li class="active col-md-3">
                        <span>1</span>
                        <p>Find Substance</p>
                    </li>

                    <li class="col-md-3">
                        <span>2</span>
                        <p>Internal Info</p>
                    </li>

                    <li class="col-md-3">
                        <span>3</span>
                        <p>Usage</p>
                    </li>

                    <li class="col-md-3">
                        <span>4</span>
                        <p>Regulation</p>
                    </li>
                </ul>

                <ul class="as-modal-tabs w-100 nav nav-tabs nav-tabs-line nav-tabs-line-blue nav-tabs-line-3x nav-tabs-line-right" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#severonLibrary" role="tab" aria-selected="true">
                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>Sevron Library
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#approvedList" role="tab" aria-selected="false">
                            Approved List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#substanceInventory" role="tab" aria-selected="false">
                            Substance Inventory
                        </a>
                    </li>
                </ul>

                <div class="as-modal-tabs tab-content">
                    <div class="tab-pane active" id="severonLibrary" role="tabpanel">
                        <div class="d-flex w-100 align-items-center">
                            <div class="form-group form-group-sm mb-0 mr-2">
                                <input class="form-control" type="text" placeholder="Solvent Cleaner RS. Comp" value="">
                            </div>

                            <button class="btn btn-custom-blue btn-xs">
                                <small>Show Search Filters</small>
                            </button>

                            <div class="form-group form-group-sm ml-auto">
                                <select class="form-control">
                                    <option>10 items per page</option>
                                </select>
                            </div>
                        </div>

                        <div class="kt-portlet kt-portlet--head--noborder mt-4">
                            <div class="kt-portlet__body p-0 overflow-auto">
                                <table class="table table-striped font-ash as-tbl">
                                    <thead>
                                        <tr>
                                            <th width="">Substance Information</th>
                                            <th width="100">SDS Info</th>
                                            <th width="10"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="font-weight-500 mb-1">Solvent Cleaner Aerosol Discontinued</p>
                                                <p class="font-size-xs mb-1">
                                                <span class="font-weight-500">Manufactured by: RS Computers Ltd</span>
                                                </p>
                                                <p class="d-flex font-size-xs mb-0">
                                                    <span>
                                                    <span class="font-weight-500">Revision:</span> 22/2/2017
                                                    </span>
                                                    
                                                    <span class="ml-4">
                                                        <span class="font-weight-500">Language:</span> English
                                                    </span>
                                                </p>
                                            </td>
                                            <td>See SDS</td>
                                            <td>    
                                                <div class="d-flex align-items-center">
                                                    <div class="h-100">
                                                        <i class="fa flaticon-eye font-ash mr-3" 
                                                            style="font-size: 16px;"></i>
                                                    </div>
                                                    <button class="btn btn-custom-blue btn-xs">
                                                        <small>Select</small>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>

                    <div class="tab-pane" id="approvedList" role="tabpanel">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>