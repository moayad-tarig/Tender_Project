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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="tenders.php">Tenders</a></li>
                            <li><a class="active" href="signup.php">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                        <script>
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


                <h4 class="heading-4 text-center mb-4 text-white bg-danger">SIGNUP</h4>
                <form method="POST" action="{{ route('register') }}" class="">
                    @csrf
                    <input id="name" type="text" class="form-control  mb-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Orgnaizaion Name">
                  

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="OrgID" type="text" class="form-control  mb-2 @error('OrgID') is-invalid @enderror" name="OrgID" value="{{ old('OrgID') }}" required autocomplete="name" autofocus placeholder="Orgnaizaion ID">

                    <input id="email" type="email" class="form-control  mb-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" class="form-control  mb-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" 
                    placeholder="password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  
                        <input id="password-confirm" type="password" class="form-control mb-3 " name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    
                </div>
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>

                    
                </form>
            </div>
        </div>
    </div>


</body></html>