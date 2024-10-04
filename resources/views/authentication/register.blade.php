<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Monster admin Template - The Ultimate Multipurpose admin template</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background-color:#800000; background-size: cover;">
            <div class="auth-box-reg p-4 pr-5 pl-5 bg-white rounded">
                <div>
                <div class="logo d-flex no-block justify-content-center align-items-center mb-3">
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                                <img src="https://v2.sorsu.edu.ph/wp-content/uploads/2023/04/sorsu.png" alt="" style="width: 100px;">
                                <h3 class="box-title ml-3"><strong>SorSU Bulan Campus</strong></h3>
                            </div>
                        </div>
                    </div>
                    <div class="logo d-flex no-block justify-content-center align-items-center mt-5 mb-3">
                        <h3 class="box-title mb-3">Sign Up</h3>
                    </div>
                    @if ($errors->any())
                        <div class="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Form -->
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                       
                            <div class="form-horizontal mt-3 form-material">
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" placeholder="First Name" id="firstName" name="firstName" value="{{old('firstName')}}" required autocomplete="firstName">
                                    </div>
                                </div>
                                <div class="form-group mb-3 ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" required="" placeholder="Last Name" id="lastName" name="lastName" value="{{old('lastName')}}" required autocomplete="lastName">
                                    </div>
                                </div>
                                <div class="form-group mb-3 ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" placeholder="Middle Name" id="middleName" name="middleName" value="{{old('middleName')}}" autocomplete="middleName">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" placeholder="Name Ext." id="nameExt" name="nameExt" value="{{old('nameExt')}}" autocomplete="nameExt">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-horizontal mt-3 form-material">
                    
                                <div class="form-group mb-3 ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" required="" placeholder="Email" id="email" name="email" value="{{old('email')}}" autocomplete="email">
                                    </div>
                                </div>
                                <div class="form-group mb-3 ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="password" required="" placeholder="Password" id="password" name="password" autocomplete="password">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="password" required="" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" autocomplete="password_confirmation">
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        <div class="row d-flex no-block justify-content-center align-items-center mt-3">
                                <div class="col-sm-12">
                                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                                </div>
                            </div>
                            <div class="row d-flex no-block justify-content-center align-items-center">
                                    <div class="form-group mb-0 mt-2 ">
                                        <div class="col-sm-12 text-center ">
                                            Already have an account? <a href="{{route('login')}}" class="text-info ml-1 ">Sign In</a>
                                        </div>
                                    </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>
</body>

</html>