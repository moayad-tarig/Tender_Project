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
                           
                            </div>
                        </div>
                    </div>


                </div>
                <div class="my-2"></div>
            </div>
        </div>
    </div>


</div>