<!-- Main header -->
<header class="header">
    <!-- Start Header Navbar-->
    <div class="main-header">
        <div class="main-menu-wrap">
            <div class="container-fluide">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('')}}/img/logo.png" data-rjs="2" alt="mineralo">
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
                                            <li class="{{ Request::routeIs('home') ? 'active' : '' }}">
                                                <a href="{{route('home')}}">Accueil <img src="{{asset('')}}/img/line2.png" alt=""></a>
                                            </li>
                                            <li class="{{ Request::routeIs('front.order') ? 'active' : '' }}">
                                                <a href="{{route('front.order')}}">Commander <img src="{{asset('')}}/img/line2.png" alt=""></a>
                                            </li>
                                            <li class="{{ Request::routeIs('services') ? 'active' : '' }}">
                                                <a href="{{route('services')}}">Services<img src="{{asset('')}}/img/line2.png" alt=""></a>
                                            </li>

                                            <li class="{{ Request::routeIs('contact') ? 'active' : '' }}">
                                                <a href="{{route('contact')}}">Contact<img src="{{asset('')}}/img/line2.png" alt=""></a>
                                            </li>
                                            <li class="{{ Request::routeIs('blog') ? 'active' : '' }}">
                                                <a href="{{route('blog')}}">Blog/Infos <img src="{{asset('')}}/img/line2.png" alt=""></a>
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
                                    <a href="{{ route('marchand.dashboard') }}" class="mr-2">Mon Compte</a>
                                    <a href="{{ route('logout') }}" class="ml-2">Deconnexion</a>
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
