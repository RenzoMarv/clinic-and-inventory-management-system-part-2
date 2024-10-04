<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>System</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <link rel="stylesheet" href="{{asset('assets/libs/chartist/dist/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/js/pages/chartist/chartist-init.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/c3/c3.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@livewireStyles
</head>

<body>
   
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
       
        @include('layouts.semanticElement.topNav')
     
        @include('layouts.semanticElement.sideBar')

        <div class="page-wrapper">

            {{ $slot }}
        
            @include('layouts.semanticElement.footer')
        </div>

    </div>

    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    @yield('scripts')
    @include('layouts.semanticElement.scripts')
    
</body>

</html>