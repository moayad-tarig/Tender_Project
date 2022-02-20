@include('admin.utilis.header')
@include('admin.utilis.navbar')


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View Tenders</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="dataTable_length"><label>Show <select
                                                    name="dataTable_length" aria-controls="dataTable"
                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="dataTable"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable no-footer" id="dataTable"
                                            width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                            style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 53px;"
                                                        aria-sort="ascending"
                                                        aria-label="Tender No.: activate to sort column descending">
                                                        Tender No.</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 91px;"
                                                        aria-label="Department: activate to sort column ascending">
                                                        Department</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 86px;"
                                                        aria-label="Description: activate to sort column ascending">
                                                        Description</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 28px;"
                                                        aria-label="File: activate to sort column ascending">File</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 37px;"
                                                        aria-label="Price: activate to sort column ascending">Price</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 37px;"
                                                        aria-label="Due Date: activate to sort column ascending">Due
                                                        Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 65px;"
                                                        aria-label="Duration: activate to sort column ascending">
                                                        Duration</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 42px;"
                                                        aria-label="Close: activate to sort column ascending">Close</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @if($tenders->count() > 0)
                                                @foreach ($tenders as $tender)
                                                {{-- <img src="{{URL::asset($tender->file) }}" alt="{{ $tender->id }}"> --}}


                                                <tr>
                                                    <td> {{ $tender->TenderNo }} </td>
                                                    <td> {{ $tender->Department }} </td>
                                                    <td> {{ $tender->Description }} </td>
                                                    <td> <form action="{{ url('admin/tender/download') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{ $tender->file }}" name="file">
                                                        
                                                        <button class="btn btn-success">Download</button>
                                                    </form> </td>
                                                    <td> {{ $tender->price }} </td>
                                                    <td> {{ $tender->DueDate }} </td>
                                                    <td> {{ $tender->Duration }} </td>
                                                    
                                                    <td> <form action="{{ url('/admin/tender/'.  $tender->id ) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    <input type="hidden" name="id" value="{{ $tender->id }}">
                                                    <button type="submit" class="btn btn-danger">Close</button>
                                                </form> </td>

                                                    
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr class="odd">
                                                    <td valign="top" colspan="8" class="dataTables_empty">No data
                                                        available in table</td>
                                                </tr>

                                                @endif


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="dataTable_info" role="status"
                                            aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="dataTable_previous"><a href="#" aria-controls="dataTable"
                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item next disabled" id="dataTable_next">
                                                    <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0"
                                                        class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="my-2"></div>
            </div>
        </div>
    </div>


</div>