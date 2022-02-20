@include('user.utilis.header')
@include('user.utilis.navbar')


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View Tender</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    
                                    <div class="col-sm-12 col-md-6">
                                        <div id="dataTable_filter" class="dataTables_filter">
                                            <form action="{{ route('view') }}" method="GET">
                                                @csrf
                                                <label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="dataTable"
                                                    name="search"></label>
                                                    <button type="submit" class="btn btn-success">Search</button>
                                            </form>
                                                </div>
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
                                                    aria-label="Close: activate to sort column ascending">BID</th>
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
                                                <td> <form action="{{ url('admin/tender/download/create') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{ $tender->file }}" name="file">
                                                    
                                                    <button class="btn btn-success">Download</button>
                                                </form> </td>
                                                <td> {{ $tender->price }} </td>
                                                <td> {{ $tender->DueDate }} </td>
                                                <td> {{ $tender->Duration }} </td>
                                                <td>
                                                    {{-- <form action="{{ url('user/bid') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{ $tender->id }}" name="tender_id">
                                                        <button class="btn btn-danger">BID</button>
                                                    </form> --}}
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">BID </button>
                                            </td>
    
                                                
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




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">تقديم الطلب</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <!-- form -->
            <form method="POST" action="{{ url('user/bid') }}">
            @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Charge</label>
                  <input type="text" class="form-control" name="Charge" id="exampleInputEmail1" aria-describedby="" placeholder="Charge">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Time expected </label>
                  <input type="text" class="form-control" id="exampleInputEmail1"name="Months" aria-describedby="" placeholder="time">
                </div>
             
              
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                    <button type="submit" class="btn btn-primary">تقديم العرض</button>
                  </div>


            </form>
            <!-- form end -->


        </div>
       
      </div>
    </div>
  </div>