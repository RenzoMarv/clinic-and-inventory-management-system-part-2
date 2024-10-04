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
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>Monster admin Template - The Ultimate Multipurpose admin template</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />
    <!-- Custom CSS -->
    <link href="{{('dist/css/style.css')}}" rel="stylesheet">
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
            <div class="row">
            
            </div>
            <div class="auth-box p-4 bg-white rounded">
                <div id="loginform">
                    <div class="logo d-flex no-block justify-content-center align-items-center mb-5">
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="w-100" src="https://v2.sorsu.edu.ph/wp-content/uploads/2023/04/sorsu.png" alt="">
                            </div>
                            <div class="col-sm-8 d-flex justify-content-center align-items-center">
                                <h3 class="box-title"><strong>SorSU Bulan Campus</strong></h3>
                            </div>
                        </div>
                    </div>
                    <!-- Form -->
                    
                    <div class="row">
                        <div class="col-12">
                        
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-horizontal mt-3 form-material" id="loginform">
                                    <div class="form-group mb-3">
                                        <div class="">
                                            <input class="form-control" type="text" required="" placeholder="Email" name="email"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="">
                                            <input class="form-control" type="password" required="" placeholder="Password" name="password"> </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <div class="checkbox checkbox-info pt-0">
                                                <input id="checkbox-signup" type="checkbox" class="material-inputs chk-col-indigo">
                                                <label for="checkbox-signup"> Remember me </label>
                                            </div> 
                                        
                                        </div>
                                    </div>
                                    <div class="form-group text-center mt-4">
                                        <div class="col-xs-12">
                                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>
                                
                                    <div class="form-group mb-0 mt-4">
                                        <div class="col-sm-12 justify-content-center d-flex">
                                            <p>Don't have an account? <a href="{{route('register')}}" class="text-info font-weight-normal ml-1">Sign Up</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
</body>

</html>