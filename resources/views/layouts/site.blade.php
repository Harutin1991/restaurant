<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ресторан 1001 ночь</title>
    <link rel="icon" href="../images/favicon.png" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="icon" href="https://preview.colorlib.com/theme/buri/img/xfavicon.png.pagespeed.ic.9qSq0vsnZ8.webp">

    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/flaticon.css">
    <link rel="stylesheet" href="./css/gijgo.min.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/nice-select.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/themify-icons.css">
</head>
<body>


<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img
                            src="../images/logo.jpg" width="77" height="47"
{{--                            src="data:image/webp;base64,UklGRjoBAABXRUJQVlA4TC4BAAAvTMAEEMdAmG1Uf5gp3vMUBAJJ/oLjLCAoem82g2wjnUJZ5s/0CJ/Y/nGnGgBCgAAgQbbttm3+xQdYQXz3cP9bRUc2ENH/CYha91uUulcvdVP1Uty0Gk6T6qV6SH2j2aWSgWu4wRWM5qOywdbh8gxsHXTUJsUUgH1aMjNLJ8AxR8TDNs2k7IBZYaUE2CS/kk1LAbj/P1wRYJdl7gmtxzIPoDJInXNOM8K0K8YYLw9wD9qknDwQK1hTaGg9ZJKIwjbggG3EI/P2prOmbcd5npcCtkCoiAesdAGxwUREDPDTbAfOQgR4sgNw0iM3cPZ8/Hv/PjZwoajkVhAPoKrksU82IHX8vO/7vdEZpRpovGWAAK7jt89f0hq1tJsMeYAr2ytf7/t+ykx70pNk3Y9PEQ=="--}}
                            alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                         id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">О ресторане</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('food_menu') }}">Меню</a>
                            </li>
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a class="nav-link dropdown-toggle" href="./blog.html" id="navbarDropdown" role="button"--}}
{{--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    Blog--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('blog') }}">Blog</a>--}}
{{--                                    <a class="dropdown-item" href="{{ route('single_blog') }}">Single blog</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a class="nav-link dropdown-toggle" href="{{ route('blog') }}" id="navbarDropdown_1"--}}
{{--                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    Галерея--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">--}}
{{--                                    <a class="dropdown-item" href="{{ route('elements') }}">Elements</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('elements') }}">Галерея</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="social_icon d-none d-lg-block">
{{--                        <a href="./index.html#" class="single_social_icon"><i class="fab fa-facebook-square"></i></a>--}}
                        <a href="https://vk.com/club74506872" class="single_social_icon"><i class="fab fa-vk fa-2x"></i></a>
                        <i class="fa fa-vk" aria-hidden="true"></i>
                        <i aria-hidden="true" class="fa fa-vk fa-2x"></i>
{{--                        <a href="./index.html#" class="single_social_icon"><i class="fab fa-instagram"></i></a>--}}
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div id="app">
    <main class="py-4--">
        @yield('content')
    </main>
</div>


<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                <div class="single-footer-widget footer_1">
                    <img
                        src="../images/logo.jpg" width="77" height="47"
{{--                        src="data:image/webp;base64,UklGRjoBAABXRUJQVlA4TC4BAAAvTMAEEMdAmG1Uf5gp3vMUBAJJ/oLjLCAoem82g2wjnUJZ5s/0CJ/Y/nGnGgBCgAAgQbbttm3+xQdYQXz3cP9bRUc2ENH/CYha91uUulcvdVP1Uty0Gk6T6qV6SH2j2aWSgWu4wRWM5qOywdbh8gxsHXTUJsUUgH1aMjNLJ8AxR8TDNs2k7IBZYaUE2CS/kk1LAbj/P1wRYJdl7gmtxzIPoDJInXNOM8K0K8YYLw9wD9qknDwQK1hTaGg9ZJKIwjbggG3EI/P2prOmbcd5npcCtkCoiAesdAGxwUREDPDTbAfOQgR4sgNw0iM3cPZ8/Hv/PjZwoajkVhAPoKrksU82IHX8vO/7vdEZpRpovGWAAK7jt89f0hq1tJsMeYAr2ytf7/t+ykx70pNk3Y9PEQ=="--}}
                        alt="logo">
                    <p>+880 253 356 263</p>
                    <span>burires@contact.com</span>
                    <div class="social_icon">
                        <a href="https://preview.colorlib.com/theme/buri/index.html#" class="single_social_icon"><i
                                class="fab fa-facebook-square"></i></a>
                        <a href="https://preview.colorlib.com/theme/buri/index.html#" class="single_social_icon"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-2 col-lg-3">
                <div class="single-footer-widget footer_2">
                    <h4>Quick links</h4>
                    <div class="contact_info">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('menu') }}"> Menu</a></li>
                            <li><a href="{{ route('single_blog') }}">Single Blog</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('elements') }}"> Elements</a></li>
                            <li><a href="{{ route('food_menu') }}">Menu Food</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4 col-lg-3">
                <div class="single-footer-widget footer_3">
                    <h4>Subscribe newsletter</h4>
                    <form action="https://preview.colorlib.com/theme/buri/index.html#">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email Address"
                                       onfocus="this.placeholder = &#39;&#39;"
                                       onblur="this.placeholder = &#39;Email Address&#39;">
                                <div class="input-group-append">
                                    <button class="btn" type="button">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p>
                        Subscribe newsletter to get all updates about discount and offers.
                    </p>
                </div>
            </div>
        </div>
        <div class="copyright_part_text">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="footer-text m-0">

                        Copyright ©
                        <script>document.write(new Date().getFullYear());</script>
                        2022 All rights reserved | This template is made with <i class="ti-heart"
                                                                                 aria-hidden="true"></i> by <a
                            href="https://colorlib.com/" target="_blank">Colorlib</a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="./js/jquery-1.12.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/gijgo.min.js"></script>
<script src="./js/jquery.magnific-popup.js"></script>
<script src="./js/jquery.nice-select.min.js"></script>
<script src="./js/masonry.pkgd.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./js/swiper.min.js"></script>
<script src="./js/custom.js"></script>

</body>
</html>
