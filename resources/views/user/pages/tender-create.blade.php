@include('user.utilis.header')
@include('user.utilis.navbar')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 text-uppercase">GENERATE TENDER</h1>

    <div class="row">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">Tender Details</h6>
            </div>
                        <div class="card-body">
                <form class="form-horizontal" action="{{ route('tender.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf




                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="TenderNo">Tender No.</label>
                        <div class="col-sm-10">
                            <input class="form-control mb-2" type="text" name="TenderNo" id="TenderNo" placeholder="Tender No." required="">
                        </div>
                    </div>
                    <div class="my-2"></div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="Dept">Department</label>
                        <div class="col-sm-10">
                            <input class="form-control mb-2" type="text" name="Dept" id="Dept" placeholder="Department" required="">
                        </div>
                    </div>
                    <div class="my-2"></div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="Desc">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control mb-2" type="text" name="Desc" id="Desc" placeholder="Brief Description"></textarea>
                        </div>
                    </div>
                    <div class="my-2"></div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="Price">Price</label>
                        <div class="col-sm-10">
                            <input class="form-control mb-2" type="text" name="Price" id="Price" placeholder="Tender Value" required="">
                        </div>
                    </div>
                    <div class="my-2"></div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="DueDate">Due Date</label>
                        <div class="col-sm-10">
                            <input class="form-control mb-2" type="date" name="DueDate" id="DueDate" placeholder="Due Date" required="">
                        </div>
                    </div>
                    <div class="my-2"></div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="Duration">Duration(in months)</label>
                        <div class="col-sm-10">
                            <input class="form-control mb-2" type="number" name="Duration" id="Duration" placeholder="Duration" required="">
                        </div>
                    </div>
                    <div class="my-2"></div>
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="File">Choose document</label>
                        <div class="col-sm-10">
                            <input class="form-control mb-2" type="file" name="file" id="file" >
                        </div>
                    </div>
                    <div class="my-2"></div>
                    <button class="btn btn-block btn-primary" type="submit" name="generate-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


    </div>