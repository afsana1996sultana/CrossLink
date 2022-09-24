<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/html2/brighton/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2022 05:15:45 GMT -->
<head>
<meta charset="utf-8">
<title>CrossLink</title>
<!-- Stylesheets -->
<link href="{{url('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{url('frontend/css/revolution-slider.css')}}" rel="stylesheet">
<link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="{{url('frontend/asset/images/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{url('frontend/asset/images/favicon.ico')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{url('frontend/css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">
        <!--header area start-->
        @include("layout.frontend.header")
        <!--header area end-->

        <!--home section four area start-->
        @yield('main_content')
        <!--home section four area end-->

        <!--footer area start-->
        @include("layout.frontend.footer")
        <!--footer area end-->
    </div>
    <!-- JS
============================================ -->

<script src="{{url('frontend/js/jquery.js')}}"></script> 
<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{url('frontend/js/revolution.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{url('frontend/js/jquery.fancybox-media.js')}}"></script>
<script src="{{url('frontend/js/owl.js')}}"></script>
<script src="{{url('frontend/js/wow.js')}}"></script>
<script src="{{url('frontend/js/script.js')}}"></script>
</body>


<!-- Mirrored from htmldemo.net/junko/junko/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 May 2022 09:45:00 GMT -->
</html>