<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <!-- Favicons -->
    <link href="{{ url('/uploads/favicon.png') }}" rel="icon">
    <link href="{{ url('/uploads/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/assets/css/style.css') }}" rel="stylesheet">

    {{-- Login --}}
    <link href="{{ url('/assets/css/login-register.css') }}" rel="stylesheet" />

    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/smaga.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.11"
            }
        };
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) ? !1 : !s([55356,
                            57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423,
                            56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356,
                            57340
                        ], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356,
                            57340
                        ])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t
                .supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load",
                    n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji),
                    c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>


    <title>Hello, world!</title>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:lpi-arroqy@gmail.com">lpi-arroqy@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 1234 567 89</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="instagram"><i class="bi bi-whatsapp"></i></a>
                {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> --}}
            </div>
        </div>
    </section><!-- End Top Bar-->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div id="logo">
                <h1><a href="{{ url('/') }}">LPI-<span>ARROQY</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="uploads/logo.png" alt=""></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Profil</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Berita</a></li>
                    {{-- Akademik --}}
                    <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            {{-- <li><a href="#">Kurikulum</a></li>
                            <li><a href="#">Galeri</a></li> --}}
                            <li class="dropdown"><a href="#"><span>PAUD</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Profil</a></li>
                                    <li><a href="#">Kegiatan</a></li>
                                    <li><a href="#">Kontak</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>MADIN</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Profil</a></li>
                                    <li><a href="#">Kegiatan</a></li>
                                    <li><a href="#">Kontak</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    {{-- End AKademik --}}
                    {{-- Alumni --}}
                    <li class="dropdown"><a href="#"><span>Alumni</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Profil</a></li>
                            <li><a href="#">Galeri</a></li>
                            <li class="dropdown"><a href="#"><span>Program Kerja</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Bulanan</a></li>
                                    <li><a href="#">Berkelanjutan</a></li>
                                    <li><a href="#">Bulan Ramadhan</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </li>
                    {{-- End Alumni --}}
                    <li><a class="nav-link scrollto" href="#contact">kontak</a></li>

                    <li>
                        <a href="{{ url('/login') }}" class="nav-link scrollto"> Masuk
                        </a>
                    </li>
                    {{-- <li>
                        <a href="/register" class="nav-link scrollto"> Daftar
                        </a>
                    </li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright
                <strong><a href="{{ url('/') }}">LPI - ARROQY</a>.</strong> All Rights Reserved
            </div>
            <div class="credits">
                {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ url('/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('/assets/js/main.js') }}"></script>

    <script src="{{ url('/assets/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ url('/assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ url('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/assets/js/login-register.js') }}"></script>
    <script type="text/javascript">
        < /body> < /
        html >
