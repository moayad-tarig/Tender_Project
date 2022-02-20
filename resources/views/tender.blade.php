<html><head>
    <title>
        HOMEPAGE
    </title>
    <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Staatliches&amp;display=swap" rel="stylesheet">    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('admin/js/jquery.min.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <meta name="keywords" content="Tender Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design">
    <!--Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('admin/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $("html,body").animate({
                        scrollTop: $(this.hash).offset().top
                    },
                    1000
                );
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->
</head>

<body>
    <!--top nav start here-->
    <div class="mother-grid">
        <div class="container">
            <div class="temp-padd">
                <!--top nav end here-->
                <!--title start here-->
                <div class="title-main">
                    <a href="index.html">
                        <h1>Tender Management System</h1>
                    </a>
                </div>
                <!--title end here-->
                <!--header start here-->
                <div class="header mb-4">
                    <div class="navg">
                        <span class="menu"> <img src="{{ asset('admin/images/icon.png')}}" alt=""></span>
                        <ul class="res">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a class="active" href="{{ url('/welcome') }}">Tenders</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            </ul>                        <script>
                            $("span.menu").click(function() {
                                $("ul.res").slideToggle("slow", function() {
                                    // Animation complete.
                                });
                            });
                        </script>
                    </div>
                 

                    <div class="clearfix"></div>
                </div>
                <!--header end here-->

                <h4 class="heading-4 text-center mb-4 text-white bg-danger">TENDERS</h4>
                                <div class="table-responsive">
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
                                            <td> <form action="{{ url('admin/tender/download') }}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{ $tender->file }}" name="file">
                                                
                                                <button class="btn btn-success">Download</button>
                                            </form> </td>
                                            <td> {{ $tender->price }} </td>
                                            <td> {{ $tender->DueDate }} </td>
                                            <td> {{ $tender->Duration }} </td>
                                            <td>
                                                <form action="{{ url('user/bid') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $tender->id }}" name="tender_id">
                                                    <button class="btn btn-danger">BID</button>
                                                </form>
                                            
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
                <div class="mb-8"></div>
            </div>
        </div>
    </div>


</body></html>