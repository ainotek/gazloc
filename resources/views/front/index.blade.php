
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Ben Ouattara">

    <!-- Document Title -->
    <title>Kenza</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <!-- CSS Files -->
    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700%7CSchoolbell" rel="stylesheet">

    <!--==== Bootstrap css file ====-->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

    <!--==== Font-Awesome css file ====-->
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">

    <!-- Owl Carusel css file -->
    <link rel="stylesheet" href="{{asset('/plugins/owl-carousel/owl.carousel.min.css')}}">

    <!-- camera css -->
    <link rel="stylesheet" href="{{asset('/plugins/camera/camera.min.css')}}">

    <!-- ====video poppu css==== -->
    <link rel="stylesheet" href="{{asset('/plugins/Magnific-Popup/magnific-popup.css')}}">

    <!--==== Style css file ====-->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <!--==== Responsive css file ====-->
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}">

    <!--==== Custom css file ====-->
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
</head>

<body>
@include('flash::message')
<!-- Preloader -->
<div class="preLoader">
    <div class="preload-img">
        <img src='{{asset('/img/preloader.gif')}}' alt="" class="pre-img">
    </div>
</div>
<!-- End Of Preloader -->
@if ('flash')

@endif
@include('front.partials.header')
        @yield('content')
@include('front.partials.footer')

<!-- back to top -->
<div class="back-to-top">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- back to top -->

<!-- JS Files -->
<!-- ==== JQuery 3.3.1 js file==== -->
<script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>

<!-- ==== Bootstrap js file==== -->
<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>

<!-- ==== JQuery Waypoint js file==== -->
<script src="{{asset('/plugins/waypoints/jquery.waypoints.min.js')}}"></script>

<!-- ==== Parsley js file==== -->
<script src="{{asset('/plugins/parsley/parsley.min.js')}}"></script>

<!-- ==== Ratina js file==== -->
<script src="{{asset('/plugins/retinajs/retina.min.js')}}"></script>

<!-- ==== parallax js==== -->
<script src="{{asset('/plugins/parallax/parallax.js')}}"></script>

<!-- ==== Owl Carousel js file==== -->
<script src="{{asset('/plugins/owl-carousel/owl.carousel.min.js')}}"></script>

<!-- ==== Menu  js file==== -->
<script src="{{asset('/js/menu.min.js')}}"></script>

<!-- ===video popup=== -->
<script src="{{asset('/plugins/Magnific-Popup/jquery.magnific-popup.min.js')}}"></script>

<!-- ====Counter js file=== -->
<script src="{{asset('/plugins/waypoints/jquery.counterup.min.js')}}"></script>

<!-- cammera js -->
<script src="{{asset('/plugins/camera/camera.min.js')}}"></script>

<!-- easing js -->
<script src="{{asset('/js/easing.js')}}"></script>

<!--==== google map api key ====-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>

<!-- ==== Script js file==== -->
<script src="{{asset('/js/scripts.js')}}"></script>

<!-- ==== Custom js file==== -->
<script src="{{asset('/js/custom.js')}}"></script>

</body>
</html>
