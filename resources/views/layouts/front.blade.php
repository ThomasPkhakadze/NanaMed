<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    @yield('title')


    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('index/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('index/css/core-style.css')}}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('index/css/responsive.css')}}">


</head>
<header class="header-area">
    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="/"><img src="{{ asset('index/img/core-img/logo.png')}}"
                                    alt="Logo"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" ta-target="#medicaMenu"
                                aria-controls="medicaMenu" aria-expanded="false" aria-label="Toggle navigation"><i
                                    class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="medicaMenu">
                                <!-- Menu Area -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('pages.index',['language'=> app()->getLocale()]) }}">{{__('Home')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('pages.about',['language'=> app()->getLocale()]) }}">{{__('About us')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('*blog')  ? "active" : ""}}"
                                            href={{ route('pages.blog',['language'=> app()->getLocale()]) }}>{{__('Blog')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">{{__('Contact')}}</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">{{__('Services')}}</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach ($services as $service)
                                            <div class="text-center">
                                                <a
                                                    href="{{ route('services.single', ['language' => app()->getLocale(), 'id' => $service->id] )}}">{{ $service->title }}</a><br>
                                            </div>
                                            @endforeach

                                        </div>
                                    </li>
                                </ul>
                                <!-- Search Form -->
                                <div class="header-search-form ml-auto">
                                    <form action="{{ route('search', ['language' => app()->getLocale()]) }}">
                                        <input type="search" class="form-control"
                                            placeholder="{{ __('Input keyword and press Enter') }}" id="search"
                                            name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div id="searchbtn">
                                    <i class="ti-search" aria-hidden="true"></i>
                                </div>
                                <ul class="navbar-nav ml-auto px-1">

                                    @guest

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('login', app()->getLocale()) }}">{{ __('Login') }}</a>
                                    </li>

                                    @elseif(Route::has('login'))
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->user_name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>

                                    @endguest

                                </ul>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">{{ app()->getLocale() }}</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'ge') }}">{{ __('GE') }}
                                                 <img  src="{{ asset('images/flags/geo.png') }}" alt="ge-flag" height="40px" width="40px" class="p-1"> </a>

                                            <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'en') }}">{{ __('EN') }}
                                                 <img  src="{{ asset('images/flags/us.png') }}" alt="us-flag" height="40px" width="40px" class="p-1"> </a>
                                                 
                                            <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'ru') }}">{{ __('RU') }}
                                                 <img  src="{{ asset('images/flags/chuchu.png') }}" alt="chuchu-flag" height="40px" width="40px" class="p-1"> </a>
                                        </div>
                                    </li>
                                </ul>



                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medica-load"></div>
        <img src="{{ asset('images/thanos.jpg')}}" alt="logo">
    </div>

    <!-- Content -->

    @yield('content')



    <div class="pt-3">
        <!-- ***** Footer Area Start ***** -->
        <footer class="footer-area">
            <!-- Main Footer Area -->
            <div class="main-footer-area section_padding_100 bg-default">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="footer-widget-area">
                                <div class="footer-logo">
                                    <img src="{{ asset('index/img/core-img/footer-logo.png')}}" alt="">
                                </div>

                                <div class="footer-social-info">

                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="footer-widget-area">
                                <div class="widget-title">
                                    <h6>Latest News</h6>
                                </div>
                                <div class="widget-blog-post">
                                    <!-- Single Blog Post -->

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="footer-widget-area">
                                <div class="widget-title">
                                    <h6>{{__('Shortcuts')}}</h6>
                                </div>
                                <ul>
                                    <li><a href="#">{{__('FAQ')}}</a></li>
                                    <li><a href="#">{{__('Contact')}}</a></li>
                                    <li><a href="#">{{__('About')}}</a></li>
                                    <li><a href="#">{{__('Services')}}</a></li>
                                    <li><a href="#">{{__('Blog')}}</a></li>
                                    <li><a href="#">{{__('Testimonials')}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="footer-widget-area">
                                <div class="widget-title">
                                    <h6>contact us</h6>
                                </div>

                                <div class="widget-contact">
                                    <!-- Single Contact Info -->
                                    <div class="widget-single-contact d-flex align-items-center">
                                        <div class="widget-contact-thumbnail mr-15">
                                            <img src="{{ asset('index/img/icons/alarm-clock.png')}}" alt="">
                                        </div>
                                        <div class="widget-contact-info">
                                            <p>Monday - Friday 08:00 - 21:00 <br>Saturday &amp; Sunday - CLOSED</p>
                                        </div>
                                    </div>
                                    <!-- Single Contact Info -->
                                    <div class="widget-single-contact d-flex align-items-center">
                                        <div class="widget-contact-thumbnail mr-15">
                                            <img src="{{ asset('index/img/icons/map-pin.png')}}" alt="">
                                        </div>
                                        <div class="widget-contact-info">
                                            <p>Lamas Carbajal Str, no 14-18 <br>417100 Montellano</p>
                                        </div>
                                    </div>
                                    <!-- Single Contact Info -->
                                    <div class="widget-single-contact d-flex align-items-center">
                                        <div class="widget-contact-thumbnail mr-15">
                                            <img src="{{ asset('index/img/icons/envelope.png')}}" alt="">
                                        </div>
                                        <div class="widget-contact-info">
                                            <p>0080 673 729 766 <br>contact@business.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Footer Area -->
            <div class="bottom-footer-area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 h-100">
                            <div
                                class="bottom-footer-content h-100 d-md-flex align-items-center justify-content-between">
                                <!-- Copywrite Text -->
                                <div class="copywrite-text">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                        This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
                                        <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                                <!-- Footer Menu -->
                                <div class="footer-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="/">{{__('Home')}}</a></li>
                                            <li><a href="/services">{{__('Services')}}</a></li>
                                            <li><a href="/about">{{__('About')}}</a></li>
                                            <li><a href="/blog">{{__('Blog')}}</a></li>
                                            <li><a href="/contact">{{__('Contact')}}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ***** Footer Area End ***** -->
    </div>

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('index/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('index/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('index/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('index/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{ asset('index/js/active.js')}}"></script>



</body>

</html>