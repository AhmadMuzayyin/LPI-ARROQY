<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/plugins/bootstrap/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> --}}

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('/plugins/fontawesome-free/css/all.min.css') }}">

    <title>Hello, world!</title>
</head>

<body>

    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}


    <!-- ======= Footer ======= -->
    <footer id="footer" class="fixed-bottom bg-white text-center">
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

    <!-- jQuery -->
    <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ url('/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ url('/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>

</body>

</html>
