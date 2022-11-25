<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Buri HTML5 Bootstrap Template by Colorlib</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="icon" href="https://preview.colorlib.com/theme/buri/img/xfavicon.png.pagespeed.ic.9qSq0vsnZ8.webp">

    <link rel="stylesheet"
          href="./css/A.bootstrap.min.css+animate.css+owl.carousel.min.css+themify-icons.css+flaticon.css+magnific-popup.css+slick.css+gijgo.min.css+nice-select.css+all.css,Mcc.qfM2swdgN8.css..css">

    <link rel="stylesheet" href="./css/A.style.css.pagespeed.cf.nsM032VUzL.css">
    <script type="text/javascript" async="" src="./js/analytics.js.download"
            nonce="a30efc86-2814-4110-8203-39e5bc6170f6"></script>
    <script defer="" referrerpolicy="origin" src="./js/s.js.download"></script>
    <script nonce="a30efc86-2814-4110-8203-39e5bc6170f6">(function (w, d) {
            !function (a, e, t, r) {
                a.zarazData = a.zarazData || {};
                a.zarazData.executed = [];
                a.zaraz = {deferred: []};
                a.zaraz.q = [];
                a.zaraz._f = function (e) {
                    return function () {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({m: e, a: t})
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0], z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                    a.zarazData.x = Math.random();
                    a.zarazData.w = a.screen.width;
                    a.zarazData.h = a.screen.height;
                    a.zarazData.j = a.innerHeight;
                    a.zarazData.e = a.innerWidth;
                    a.zarazData.l = a.location.href;
                    a.zarazData.r = e.referrer;
                    a.zarazData.k = a.screen.colorDepth;
                    a.zarazData.n = e.characterSet;
                    a.zarazData.o = (new Date).getTimezoneOffset();
                    a.zarazData.q = [];
                    for (; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin";
                    z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
                    t.parentNode.insertBefore(z, t)
                };
                ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);</script>
</head>
<body>


<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img
                            src="data:image/webp;base64,UklGRjoBAABXRUJQVlA4TC4BAAAvTMAEEMdAmG1Uf5gp3vMUBAJJ/oLjLCAoem82g2wjnUJZ5s/0CJ/Y/nGnGgBCgAAgQbbttm3+xQdYQXz3cP9bRUc2ENH/CYha91uUulcvdVP1Uty0Gk6T6qV6SH2j2aWSgWu4wRWM5qOywdbh8gxsHXTUJsUUgH1aMjNLJ8AxR8TDNs2k7IBZYaUE2CS/kk1LAbj/P1wRYJdl7gmtxzIPoDJInXNOM8K0K8YYLw9wD9qknDwQK1hTaGg9ZJKIwjbggG3EI/P2prOmbcd5npcCtkCoiAesdAGxwUREDPDTbAfOQgR4sgNw0iM3cPZ8/Hv/PjZwoajkVhAPoKrksU82IHX8vO/7vdEZpRpovGWAAK7jt89f0hq1tJsMeYAr2ytf7/t+ykx70pNk3Y9PEQ=="
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="./blog.html" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('blog') }}">Blog</a>
                                    <a class="dropdown-item" href="{{ route('single_blog') }}">Single blog</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('blog') }}" id="navbarDropdown_1"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    <a class="dropdown-item" href="{{ route('elements') }}">Elements</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="social_icon d-none d-lg-block">
                        <a href="./index.html#" class="single_social_icon"><i class="fab fa-facebook-square"></i></a>
                        <a href="./index.html#" class="single_social_icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>


<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                <div class="single-footer-widget footer_1">
                    <img
                        src="data:image/webp;base64,UklGRjoBAABXRUJQVlA4TC4BAAAvTMAEEMdAmG1Uf5gp3vMUBAJJ/oLjLCAoem82g2wjnUJZ5s/0CJ/Y/nGnGgBCgAAgQbbttm3+xQdYQXz3cP9bRUc2ENH/CYha91uUulcvdVP1Uty0Gk6T6qV6SH2j2aWSgWu4wRWM5qOywdbh8gxsHXTUJsUUgH1aMjNLJ8AxR8TDNs2k7IBZYaUE2CS/kk1LAbj/P1wRYJdl7gmtxzIPoDJInXNOM8K0K8YYLw9wD9qknDwQK1hTaGg9ZJKIwjbggG3EI/P2prOmbcd5npcCtkCoiAesdAGxwUREDPDTbAfOQgR4sgNw0iM3cPZ8/Hv/PjZwoajkVhAPoKrksU82IHX8vO/7vdEZpRpovGWAAK7jt89f0hq1tJsMeYAr2ytf7/t+ykx70pNk3Y9PEQ=="
                        alt="#">
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


<script src="./js/jquery-1.12.1.min.js.download"></script>

<script src="./js/popper.min.js+bootstrap.min.js.pagespeed.jc.dnpjRteUAI.js.download"></script>
<script>eval(mod_pagespeed_K_FOI4z3Gz);</script>

<script>eval(mod_pagespeed_sNmPIrnSp2);</script>

<script src="./js/jquery.magnific-popup.js.download"></script>

<script src="./js/swiper.min.js.download"></script>

<script src="./js/masonry.pkgd.js.download"></script>

<script src="./js/owl.carousel.min.js+slick.min.js.pagespeed.jc.ukCXEDCbu8.js.download"></script>
<script>eval(mod_pagespeed_bFck02mBSj);</script>

<script>eval(mod_pagespeed_C_i_Yijl62);</script>
<script src="./js/gijgo.min.js.download"></script>
<script src="./js/jquery.nice-select.min.js+custom.js.pagespeed.jc.yhcUnf1S7u.js.download"></script>
<script>eval(mod_pagespeed_DrBjB1LrH0);</script>

<script>eval(mod_pagespeed_vvdQVHcTNp);</script>

<script async="" src="./js/js"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer="" src="./js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;744e769c6c24334a&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.8.1&quot;,&quot;si&quot;:100}"
        crossorigin="anonymous"></script>

</body>
</html>
