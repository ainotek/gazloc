<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document Title -->
    <title>kenza</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <!-- CSS Files -->
    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700%7CSchoolbell" rel="stylesheet">
    <!--==== Bootstrap css file ====-->
    <link rel="stylesheet" href="{{asset('')}}css/bootstrap.min.css">
    <!--==== Font-Awesome css file ====-->
    <link rel="stylesheet" href="{{asset('')}}css/font-awesome.min.css">
    <!-- Owl Carusel css file -->
    <link rel="stylesheet" href="{{asset('')}}plugins/owl-carousel/owl.carousel.min.css">
    <!-- camera css -->
    <link rel="stylesheet" href="{{asset('')}}plugins/camera/camera.min.css">
    <!-- ====video poppu css==== -->
    <link rel="stylesheet" href="{{asset('')}}plugins/Magnific-Popup/magnific-popup.css">
    <!--==== Style css file ====-->
    <link rel="stylesheet" href="{{asset('')}}css/style.css">
    <!--==== Responsive css file ====-->
    <link rel="stylesheet" href="{{asset('')}}css/responsive.css">
    <!--==== Custom css file ====-->
    <link rel="stylesheet" href="{{asset('')}}css/custom.css">
</head>
<body>
<!-- Preloader -->
<div class="preLoader">
    <div class="preload-img">
        <img src='{{asset('')}}img/preloader.gif' alt="" class="pre-img">
    </div>
</div>
<!-- End Of Preloader -->
<!-- Main header -->
<header class="header">
    <!-- Start Header Navbar-->
    <div class="main-header header-style2">
        <div class="main-menu-wrap">
            <div class="container-fluide">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img class="main-logo" src="{{asset('')}}img/logo2.png" data-rjs="2" alt="mineralo">
                                <img class="sticky-logo d-none" src="{{asset('')}}img/logo.png" data-rjs="2" alt="mineralo">
                            </a>
                        </div>
                        <!-- End of Logo -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-6 menu-button">
                        <div class="menu--inner-area clearfix">
                            <div class="menu-wraper">
                                <nav>
                                    <!-- Header-menu -->
                                    <div class="header-menu dosis">
                                        <ul>
                                            <li>
                                                <a href="{{route('home')}}">
                                                    Accueil <img src="{{asset('')}}img/line2.png" alt="">
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="{{route('front.order')}}">Commander <img src="{{asset('')}}img/line2.png" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="{{route('services')}}">Services<img src="{{asset('')}}img/line2.png" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="{{route('contact')}}">Contact<img src="{{asset('')}}img/line2.png" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="{{route('blog')}}">Blog <img src="{{asset('')}}img/line2.png" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End of Header-menu -->
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="urgent-call text-right">
                            <div class="top-right ">
                                @auth
                                    <a href="{{ route('marchand.dashboard') }}">Compte</a>
                                @else
                                    <a href="{{ route('Marchantlogin') }}" class="mr-2">Connexion</a>
                                    <a href="{{ route('MerchantRegister') }}" class="ml-2">Enregistrement</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Navbar-->
</header>
<!-- End of Main header -->
<!-- banner area -->
<div class="banner-area-inner">
    <div class="banner-wrap home-banner2" data-bg-img='{{asset('')}}img/banner/h2-banner1.png'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9">
                    <!-- banner text -->
                    <div class="banner-text-wrap text-center">
                        <span class="schoolbell">Order Now and Get Free Water Delivery</span>
                        <h1 class="text-white">We Deliver the Best Pure<br> Mineral Water</h1>
                    </div>
                    <!-- End of banner text -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- banner form area -->
                    <div class="banner-form-area">
                        <form action="#">
                            <div class="inpout-feield-wrap">
                                <input type="text" placeholder="Name" class="banner-form" required>
                                <input type="number" placeholder="Number" class="banner-form" required>
                                <input type="text" placeholder="Address" class="banner-form" required>
                                <input type="number" placeholder="Bottol" class="banner-form" required>
                                <button class="btn">Order Now</button>
                            </div>
                            <div class="form-checkbox">
                                <ul class="mb-0 list-unstyled">
                                    <li>
                                        <label class="checkbox-wrap">Home
                                            <input type="checkbox" name="bottol-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-wrap">Office
                                            <input type="checkbox" checked="checked" name="bottol-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <!-- end of banner form area -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of banner area -->
<!-- life safer area -->
<section class="pt-120 pb-110 primary-bg top-shape2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- about safer -->
                <div class="about-safer-inner">
                    <div class="life-safer-image">
                        <img src="{{asset('')}}img/safe-img.png" alt="">
                    </div>
                    <div class="safer-text">
                        <!-- section title -->
                        <div class="section-title type2">
                            <span class="schoolbell">Water is Nothing but Life</span>
                            <h2>Making Your Life Safer</h2>
                        </div>
                        <!-- End of section title -->
                        <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you. proident, sunt in culpa qui officia. deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- about safer -->
            </div>
            <div class="col-lg-6">
                <!-- life safer inner -->
                <div class="safer-area-text">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <!-- single safer -->
                            <div class="single-safer-inner text-center">
                                <div class="safer-image">
                                    <img src="{{asset('')}}img/icons/water-bottle(1).svg" class="svg" alt="">
                                </div>
                                <h4>Soft Drinking Water</h4>
                                <p>Sed quia magni eos qui ratione volup tatem.</p>
                            </div>
                            <!-- End of single safer -->
                        </div>
                        <div class="col-12 col-sm-6">
                            <!-- single safer -->
                            <div class="single-safer-inner text-center">
                                <div class="safer-image">
                                    <img src="{{asset('')}}img/icons/glass-of-water.svg" class="svg" alt="">
                                </div>
                                <h4>Cholorine Free Water</h4>
                                <p>Sed quia magni eos qui ratione volup tatem.</p>
                            </div>
                            <!-- End of single safer -->
                        </div>
                        <div class="col-12 col-sm-6">
                            <!-- single safer -->
                            <div class="single-safer-inner text-center">
                                <div class="safer-image">
                                    <img src="{{asset('')}}img/icons/water-gallon.svg" class="svg" alt="">
                                </div>
                                <h4>Pure Mineralized Water</h4>
                                <p>Sed quia magni eos qui ratione volup tatem.</p>
                            </div>
                            <!-- End of single safer -->
                        </div>
                        <div class="col-12 col-sm-6">
                            <!-- single safer -->
                            <div class="single-safer-inner text-center">
                                <div class="safer-image">
                                    <img src="{{asset('')}}img/icons/laboratory.svg" class="svg" alt="">
                                </div>
                                <h4>Total Home Solution</h4>
                                <p>Sed quia magni eos qui ratione volup tatem.</p>
                            </div>
                            <!-- End of single safer -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of about inner -->
        </div>
    </div>
</section>
<!-- End of safer area -->
<!-- feature area type3 -->
<section class="pt-120 pb-90 top-shape">
    <div class="features-inner type3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <!-- single feature -->
                    <div class="single-feature">
                        <h4>Free Home Delivery</h4>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit.</p>
                    </div>
                    <!-- End of single feature -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- single feature -->
                    <div class="single-feature">
                        <h4>Certified Company</h4>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit.</p>
                    </div>
                    <!-- End of single feature -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- single feature -->
                    <div class="single-feature">
                        <h4>Customer Satisfaction</h4>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit.</p>
                    </div>
                    <!-- End of single feature -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of feature area type3 -->
<!-- feature area type2-->
<section>
    <div class="features-inner type2 pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <!-- single featuer inner -->
                    <div class="single-feature text-center">
                        <img src="{{asset('')}}img/icons/feature1.svg" class="svg" alt="">
                        <h3>Purity to the Max</h3>
                    </div>
                    <!-- End of single featuer inner -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <!-- single featuer inner -->
                    <div class="single-feature text-center">
                        <img src="{{asset('')}}img/icons/feature2.svg" class="svg" alt="">
                        <h3>Health Certificates</h3>
                    </div>
                    <!-- End of single featuer inner -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <!-- single featuer inner -->
                    <div class="single-feature text-center">
                        <img src="{{asset('')}}img/icons/feature3.svg" class="svg" alt="">
                        <h3>Quality Water Standard</h3>
                    </div>
                    <!-- End of single featuer inner -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <!-- single featuer inner -->
                    <div class="single-feature text-center">
                        <img src="{{asset('')}}img/icons/feature4.svg" class="svg" alt="">
                        <h3>Deep Water Filtration</h3>
                    </div>
                    <!-- End of single featuer inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of feature area -->
<!-- our quality -->
<div class="banner_area1 clearfix">
    <div class="slider_overlay_area slider_height">
        <div class="container slider_height">
            <div class="row slider_height">
                <div class="col-md-5 offset-md-7 slider_height">
                    <!-- delivery form -->
                    <div class="banner-delivery-form">
                        <div class="form-header text-center">
                            <h2>Delivery Form</h2>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" required="" class="theme-input-style">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email" required="" class="theme-input-style">
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-12">
                                    <input type="number" placeholder="Number" class="theme-input-style">
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" placeholder="Address" class="theme-input-style">
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" placeholder="Choose Bottles" class="theme-input-style">
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col">
                                    <div class="form-checkbox type2">
                                        <ul class="mb-0 list-unstyled">
                                            <li>
                                                <label class="checkbox-wrap">Home
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-wrap">Office
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col">
                                    <div class="form-btn">
                                        <button class="btn" type="submit">Order Now</button>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /.form -->
                    </div>
                    <!-- End of delivery form -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.overlay -->
    <div class="camera_wrap" id="banner_slider1" style="display: block; height: 900px;">
        <div class="camera_fakehover">
            <div class="camera_src camerastarted camerasliding">
                <div class="hero_slider" data-src="{{asset('')}}img/banner/h3-banner1.jpg">
                    <!--/.container-->
                </div>
                <!--/.Slider Item-->
                <div class="hero_slider" data-src="{{asset('')}}img/banner/h3-banner2.jpg">
                    <!--/.container-->
                </div>
                <!-- /.hero area -->
            </div>
            <div class="camera_target">
                <div class="cameraCont">
                    <div class="cameraSlide cameraSlide_0 cameracurrent" style="visibility: visible; z-index: 999; margin-left: 0px; margin-top: 0px;">
                        <img src="{{asset('')}}img/banner/h3-banner1.jpg?1570921806069" class="imgLoaded grow" data-alignment="" data-portrait="" width="1894" height="930" style="visibility: visible; height: 900px; margin-left: -196.452px; margin-right: -196.452px; margin-top: 0px; position: absolute; width: 1832.9px;">
                        <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                    </div>
                    <div class="cameraSlide cameraSlide_1 cameranext" style="z-index: 1; margin-left: 0px; margin-top: 0px;">
                        <img src="{{asset('')}}img/banner/h3-banner2.jpg?1570921806083" class="imgLoaded grow" data-alignment="" data-portrait="" width="1894" height="930" style="visibility: visible; height: 900px; margin-left: -196.452px; margin-right: -196.452px; margin-top: 0px; position: absolute; width: 1832.9px;">
                        <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                    </div>
                    <div class="cameraSlide cameraSlide_2 cameranext" style="z-index: 1; display: none;">
                        <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                    </div>
                    <div class="cameraappended cameraeased" style="display: block; overflow: hidden; position: absolute; z-index: 1000; height: 114px; left: 0px; top: 0px; width: 0px; margin-top: 0px; margin-left: -1441px; opacity: 1;">
                        <div class="cameraSlide cameraSlide_1 cameracurrent cameranext" style="z-index: 999; margin-left: 0px; margin-top: 0px; height: 900px; width: 1440px;">
                            <img src="{{asset('')}}img/banner/h3-banner2.jpg?1570921806083" class="imgLoaded grow" data-alignment="" data-portrait="" width="1894" height="930" style="visibility: visible; height: 900px; margin-left: -196.452px; margin-right: -196.452px; margin-top: 0px; position: absolute; width: 1832.9px;">
                            <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                        </div>
                    </div>
                    <div class="cameraappended cameraeased" style="display: block; overflow: hidden; position: absolute; z-index: 1000; height: 114px; left: 0px; top: 113px; width: 0px; margin-top: 0px; margin-left: 1441px; opacity: 1;">
                        <div class="cameraSlide cameraSlide_1 cameracurrent cameranext" style="z-index: 999; margin-left: 0px; margin-top: -113px; height: 900px; width: 1440px;">
                            <img src="{{asset('')}}img/banner/h3-banner2.jpg?1570921806083" class="imgLoaded grow" data-alignment="" data-portrait="" width="1894" height="930" style="visibility: visible; height: 900px; margin-left: -196.452px; margin-right: -196.452px; margin-top: 0px; position: absolute; width: 1832.9px;">
                            <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                        </div>
                    </div>
                    <div class="cameraappended" style="display: block; overflow: hidden; position: absolute; z-index: 1000; height: 114px; left: 0px; top: 226px; width: 1.21379px; margin-top: 0px; margin-left: -1439.79px; opacity: 1;">
                        <div class="cameraSlide cameraSlide_1 cameracurrent cameranext" style="z-index: 999; margin-left: 0px; margin-top: -226px; height: 900px; width: 1440px;">
                            <img src="{{asset('')}}img/banner/h3-banner2.jpg?1570921806083" class="imgLoaded grow" data-alignment="" data-portrait="" width="1894" height="930" style="visibility: visible; height: 900px; margin-left: -196.452px; margin-right: -196.452px; margin-top: 0px; position: absolute; width: 1832.9px;">
                            <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                        </div>
                    </div>
                    <div class="cameraappended" style="display: block; overflow: hidden; position: absolute; z-index: 1000; height: 114px; left: 0px; top: 339px; width: 2.51901px; margin-top: 0px; margin-left: 1438.48px; opacity: 1;">
                        <div class="cameraSlide cameraSlide_1 cameracurrent cameranext" style="z-index: 999; margin-left: 0px; margin-top: -339px; height: 900px; width: 1440px;">
                            <img src="{{asset('')}}img/banner/h3-banner2.jpg?1570921806083" class="imgLoaded grow" data-alignment="" data-portrait="" width="1894" height="930" style="visibility: visible; height: 900px; margin-left: -196.452px; margin-right: -196.452px; margin-top: 0px; position: absolute; width: 1832.9px;">
                            <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                        </div>
                    </div>
                    <div class="cameraappended" style="display: block; overflow: hidden; position: absolute; z-index: 1000; height: 113px; left: 0px; top: 452px; width: 7.7071px; margin-top: 0px; margin-left: -1433.29px; opacity: 1;">
                        <div class="cameraSlide cameraSlide_1 cameracurrent cameranext" style="z-index: 999; margin-left: 0px; margin-top: -452px; height: 900px; width: 1440px;">
                            <img src="{{asset('')}}img/banner/h3-banner2.jpg?1570921806083" class="imgLoaded grow" data-alignment="" data-portrait="" width="1894" height="930" style="visibility: visible; height: 900px; margin-left: -196.452px; margin-right: -196.452px; margin-top: 0px; position: absolute; width: 1832.9px;">
                            <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                        </div>
                    </div>
                    <div class="cameraappended" style="display: block; overflow: hidden; position: absolute; z-index: 1000; height: 113px; left: 0px; top: 564px; width: 15.5573px; margin-top: 0px; margin-left: 1425.44px; opacity: 1;">
                        <div class="cameraSlide cameraSlide_1 cameracurrent cameranext" style="z-index: 999; margin-left: 0px; margin-top: -564px; height: 900px; width: 1440px;">
                            <img src="{{asset('')}}img/banner/h3-banner2.jpg?1570921806083" class="imgLoaded grow" data-alignment="" data-portrait="" width="1894" height="930" style="visibility: visible; height: 900px; margin-left: -196.452px; margin-right: -196.452px; margin-top: 0px; position: absolute; width: 1832.9px;">
                            <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                        </div>
                    </div>
                    <div class="cameraappended" style="display: block; overflow: hidden; position: absolute; z-index: 1000; height: 113px; left: 0px; top: 676px; width: 42.2102px; margin-top: 0px; margin-left: -1398.79px; opacity: 1;">
                        <div class="cameraSlide cameraSlide_1 cameracurrent cameranext" style="z-index: 999; margin-left: 0px; margin-top: -676px; height: 900px; width: 1440px;">
                            <img src="{{asset('')}}img/banner/h3-banner2.jpg?1570921806083" class="imgLoaded grow" data-alignment="" data-portrait="" width="1894" height="930" style="visibility: visible; height: 900px; margin-left: -196.452px; margin-right: -196.452px; margin-top: 0px; position: absolute; width: 1832.9px;">
                            <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                        </div>
                    </div>
                    <div class="cameraappended" style="display: block; overflow: hidden; position: absolute; z-index: 1000; height: 113px; left: 0px; top: 788px; width: 90.0625px; margin-top: 0px; margin-left: 1350.94px; opacity: 1;">
                        <div class="cameraSlide cameraSlide_1 cameracurrent cameranext" style="z-index: 999; margin-left: 0px; margin-top: -788px; height: 900px; width: 1440px;">
                            <img src="{{asset('')}}img/banner/h3-banner2.jpg?1570921806083" class="imgLoaded grow" data-alignment="" data-portrait="" width="1894" height="930" style="visibility: visible; height: 900px; margin-left: -196.452px; margin-right: -196.452px; margin-top: 0px; position: absolute; width: 1832.9px;">
                            <div class="camerarelative" style="width: 1440px; height: 900px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="camera_overlayer"></div>
            <div class="camera_target_content">
                <div class="cameraContents">
                    <div class="cameraContent cameracurrent" style="display: none;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <!-- banner text wrap -->
                                    <div class="banner-text-wrap">
                                        <span class="schoolbell fadeInUp" style="animation-duration: 1s; -webkit-animation-duration: 1s; animation-fill-mode: both; animation-delay: .0s;-webkit-animation-delay: .0s;">Enjoy great tasting bottled water</span>
                                        <h1 class="text-white fadeInUp" style="animation-duration: 1s; -webkit-animation-duration: 1s; animation-fill-mode: both; animation-delay: .2s;-webkit-animation-delay: .3s;">We deliver the<br> best pure mineral water</h1>
                                        <a href="#" class="btn fadeInUp" style="animation-duration: 1s; -webkit-animation-duration: 1s; animation-fill-mode: both; animation-delay: .4s;-webkit-animation-delay: .4s;">Order Now</a>
                                    </div>
                                    <!--/.End of  banner text wrap -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <div class="cameraContent" style="display: none;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <!-- banner text wrap -->
                                    <div class="banner-text-wrap">
                                        <span class="schoolbell fadeInUp" style="animation-duration: 1s; -webkit-animation-duration: 1s; animation-fill-mode: both; animation-delay: .0s;-webkit-animation-delay: .0s;">Enjoy great tasting bottled water</span>
                                        <h1 class="text-white fadeInUp" style="animation-duration: 1s; -webkit-animation-duration: 1s; animation-fill-mode: both; animation-delay: .2s;-webkit-animation-delay: .2s;">We deliver the<br> best pure mineral water</h1>
                                        <a href="#" class="btn fadeInUp" style="animation-duration: 1s; -webkit-animation-duration: 1s; animation-fill-mode: both; animation-delay: .4s;-webkit-animation-delay: .4s;">Order Now</a>
                                    </div>
                                    <!--/.End of  banner text wrap -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="camera_bar" style="display: none; top: auto; height: 7px;"><span class="camera_bar_cont" style="opacity: 0.8; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px; background-color: rgb(34, 34, 34);"><span id="pie_1" style="opacity: 0; position: absolute; background-color: rgb(238, 238, 238); left: 0px; right: 0px; top: 2px; bottom: 2px;"></span></span></div>
            <div class="camera_prev" style="opacity: 0;"><span></span></div>
            <div class="camera_next" style="opacity: 0;"><span></span></div>
        </div>
        <div class="camera_loader" style="visibility: visible; display: none;"></div>
    </div>
    <!-- /.camera wrap -->
</div>
<!-- End of our quality -->
<!-- bottole deliver -->
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- section title -->
                <div class="section-title text-center">
                    <span class="schoolbell">Water Bottles</span>
                    <h2>We Deliver Bottles</h2>
                </div>
                <!-- End of section title -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <!-- single bottle deliver wrap -->
                <div class="single-bottle-inner text-center">
                    <div class="bottle-image">
                        <img src="{{asset('')}}img/icons/water-gallon.svg" alt="" class="svg">
                    </div>
                    <div class="single-bottle-text">
                        <h4>10 Litre Gallon</h4>
                        <p>Sed quia magni eos qui lorem ratione volup tatem.</p>
                        <a href="service-details.html"><i class="fa fa-arrow-circle-o-right"></i>Order</a>
                    </div>
                </div>
                <!-- End of single bottle deliver wrap -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single bottle deliver wrap -->
                <div class="single-bottle-inner text-center">
                    <div class="bottle-image">
                        <img src="{{asset('')}}img/icons/big-bottle-of-water.svg" alt="" class="svg">
                    </div>
                    <div class="single-bottle-text">
                        <h4>20 Litre Gallon</h4>
                        <p>Sed quia magni eos qui lorem ratione volup tatem.</p>
                        <a href="service-details.html"><i class="fa fa-arrow-circle-o-right"></i>Order</a>
                    </div>
                </div>
                <!-- End of single bottle deliver wrap -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- single bottle deliver wrap -->
                <div class="single-bottle-inner text-center">
                    <div class="bottle-image">
                        <img src="{{asset('')}}img/icons/bottle-of-water.svg" alt="" class="svg">
                    </div>
                    <div class="single-bottle-text">
                        <h4>1 Litre Gallon</h4>
                        <p>Sed quia magni eos qui lorem ratione volup tatem.</p>
                        <a href="service-details.html"><i class="fa fa-arrow-circle-o-right"></i>Order</a>
                    </div>
                </div>
                <!-- End of single bottle deliver wrap -->
            </div>
            <div class="col-12">
                <div class="deliver-btn text-center">
                    <a href="service.html" class="btn">View all Bottle</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of bottole deliver -->
<!-- testimonial area -->
<section class="pt-120 pb-110 blue-bg2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <!-- section title -->
                <div class="section-title text-center">
                    <span class="schoolbell">Our Feedbacks</span>
                    <h2 class="text-white">Testimonials</h2>
                </div>
                <!-- End of section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testionial-carousel-wrap type2">
                    <div class="testionial-carousel2 owl-carousel">
                        <!-- single testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testi-quate">
                                <img src="{{asset('')}}img/qort-icon.png" alt="">
                            </div>
                            <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                            <div class="testimonial-author">
                                <div class="testimonial-author-deg">
                                    <h4>Kevin Martin</h4>
                                    <p>Manager</p>
                                </div>
                                <img src="{{asset('')}}img/team/author4.png" alt="">
                            </div>
                        </div>
                        <!-- End of single testimonial -->
                        <!-- single testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testi-quate">
                                <img src="{{asset('')}}img/qort-icon.png" alt="">
                            </div>
                            <p>There are many variations of passages of available but the majority have alteration in some form by inject humour or random words which don't look even slightly they will believe you.</p>
                            <div class="testimonial-author">
                                <div class="testimonial-author-deg">
                                    <h4>Kevin Martin</h4>
                                    <p>Manager</p>
                                </div>
                                <img src="{{asset('')}}img/team/author4.png" alt="">
                            </div>
                        </div>
                        <!-- End of single testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of testimonial area -->
<!-- our blog -->
<section class="pt-120 pb-90 top-shape">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- section title -->
                <div class="section-title text-center">
                    <span class="schoolbell">News & Articles</span>
                    <h2>Latest Blog Posts</h2>
                </div>
                <!-- End of section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <!-- single blog inner -->
                <div class="single-blog-inner">
                    <!-- blog image -->
                    <div class="post-image">
                        <a href="#">
                            <img src="{{asset('')}}img/blog/blog1.png" alt="">
                        </a>
                        <div class="post-date">
                            <p><span>30</span>Sep</p>
                        </div>
                    </div>
                    <!--End of  blog image -->
                    <!-- post content -->
                    <div class="post-content">
                        <div class="post-details">
                            <div class="post-title">
                                <h3><a href="#">Great taste fresh & consistent</a></h3>
                            </div>
                            <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                            <a href="#"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                        </div>
                        <div class="post-info d-flex">
                            <a href="#"><span>By</span>Admin</a>
                            <a href="#"><span>2</span> Comeent</a>
                        </div>
                    </div>
                    <!-- End of post content -->
                </div>
                <!-- End of single blog inner -->
            </div>
            <div class="col-md-6 col-lg-4">
                <!-- single blog inner -->
                <div class="single-blog-inner">
                    <!-- blog image -->
                    <div class="post-image">
                        <a href="#">
                            <img src="{{asset('')}}img/blog/blog3.png" alt="">
                        </a>
                        <div class="post-date">
                            <p><span>30</span>Sep</p>
                        </div>
                    </div>
                    <!--End of  blog image -->
                    <!-- post content -->
                    <div class="post-content">
                        <div class="post-details">
                            <div class="post-title">
                                <h3><a href="#">Water delivered to your home</a></h3>
                            </div>
                            <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                            <a href="#"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                        </div>
                        <div class="post-info d-flex">
                            <a href="#"><span>By</span>Admin</a>
                            <a href="#"><span>2</span> Comeent</a>
                        </div>
                    </div>
                    <!-- End of post content -->
                </div>
                <!-- End of single blog inner -->
            </div>
            <div class="col-md-6 col-lg-4">
                <!-- single blog inner -->
                <div class="single-blog-inner">
                    <!-- blog image -->
                    <div class="post-image">
                        <a href="#">
                            <img src="{{asset('')}}img/blog/blog2.png" alt="">
                        </a>
                        <div class="post-date">
                            <p><span>30</span>Sep</p>
                        </div>
                    </div>
                    <!--End of  blog image -->
                    <!-- post content -->
                    <div class="post-content">
                        <div class="post-details">
                            <div class="post-title">
                                <h3><a href="#">Delicious water always on tap</a></h3>
                            </div>
                            <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words.</p>
                            <a href="#"><i class="fa fa-arrow-circle-o-right"></i>More</a>
                        </div>
                        <div class="post-info d-flex">
                            <a href="#"><span>By</span>Admin</a>
                            <a href="#"><span>2</span> Comeent</a>
                        </div>
                    </div>
                    <!-- End of post content -->
                </div>
                <!-- End of single blog inner -->
            </div>
        </div>
    </div>
</section>
<!-- End of our blog -->
<!-- map -->
<div class="google-map">
    <div id="google-map"></div>
</div>
<!-- End of map -->
<!-- call to action area -->
<section class="pt-120 pb-100 blue-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <!-- cta title -->
                <div class="callto-heading">
                    <span class="schoolbell">Free Delivery on All Orders</span>
                    <h2 class="text-white">We are Ready to Take Your Call! 000 8888 999</h2>
                </div>
                <!-- cta title -->
            </div>
            <div class="col-md-4">
                <div class="call-action-btn text-right">
                    <a href="#" class="btn">Book Your Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- call to action area -->
@include('front.partials.footer')
<!-- back to top -->
<div class="back-to-top">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- back to top -->
<!-- JS Files -->
<!-- ==== JQuery 3.3.1 js file==== -->
<script src="{{asset('')}}js/jquery-3.3.1.min.js"></script>
<!-- ==== Bootstrap js file==== -->
<script src="{{asset('')}}js/bootstrap.bundle.min.js"></script>
<!-- ==== JQuery Waypoint js file==== -->
<script src="{{asset('')}}plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- ==== Parsley js file==== -->
<script src="{{asset('')}}plugins/parsley/parsley.min.js"></script>
<!-- ==== Ratina js file==== -->
<script src="{{asset('')}}plugins/retinajs/retina.min.js"></script>
<!-- ==== parallax js==== -->
<script src="{{asset('')}}plugins/parallax/parallax.js"></script>
<!-- ==== Owl Carousel js file==== -->
<script src="{{asset('')}}plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- ==== Menu  js file==== -->
<script src="{{asset('')}}js/menu.min.js"></script>
<!-- ===video popup=== -->
<script src="{{asset('')}}plugins/Magnific-Popup/jquery.magnific-popup.min.js"></script>
<!-- ====Counter js file=== -->
<script src="{{asset('')}}plugins/waypoints/jquery.counterup.min.js"></script>
<!-- cammera js -->
<script src="{{asset('')}}plugins/camera/camera.min.js"></script>
<!-- easing js -->
<script src="{{asset('')}}js/easing.js"></script>
<!--==== google map api key ====-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>
<!-- ==== Script js file==== -->
<script src="{{asset('')}}js/scripts.js"></script>
<!-- ==== Custom js file==== -->
<script src="{{asset('')}}js/custom.js"></script>
</body>
</html>
