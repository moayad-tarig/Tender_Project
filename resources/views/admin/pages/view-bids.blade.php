@include('admin.utilis.header')
@include('admin.utilis.navbar')


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View Bids</h6>
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
                                                        User.</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 91px;"
                                                        aria-label="Department: activate to sort column ascending">
                                                        OrgID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 86px;"
                                                        aria-label="Description: activate to sort column ascending">
                                                        Charge</th>
                                                   
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 37px;"
                                                        aria-label="Price: activate to sort column ascending">Months</th>
                                                   
                                                   
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 42px;"
                                                        aria-label="Close: activate to sort column ascending">Delete</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" style="width: 42px;"
                                                        aria-label="Close: activate to sort column ascending">Confirm</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @if($bids->count() > 0)
                                                @foreach ($bids as $bid)
                                                {{-- <img src="{{URL::asset($bid->file) }}" alt="{{ $bid->id }}"> --}}


                                                <tr>
                                                    
                                                    {{-- <td> {{ $bid->users()->name() }} </td> --}}
                                                    <td> {{ $bid->Users->name }} </td>
                                                    <td> {{ $bid->Description }} </td>
                                                  
                                                    <td> {{ $bid->Charge  }} </td>
                                                    <td> {{ $bid->Month  }} </td>
                                                    
                                                
                                                    
                                                    <td> <form action="{{ url('admin/bids/delete/'.  $bid->id ) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    <input type="hidden" name="id" value="{{ $bid->id }}">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form> </td>
                                                <td> <form action="{{ url('admin/bids/mail/' ) }}" method="POST">
                                                    @csrf
                                                <input type="hidden" name="email" value="{{ $bid->Users->email }}">
                                                <button type="submit" class="btn btn-success">Confirm</button>
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