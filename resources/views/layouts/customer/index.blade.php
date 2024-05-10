<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Gigaland - NFT Marketplace Website</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Gigaland - NFT Marketplace Website" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />

    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('gigaland-nft/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('gigaland-nft/css/bootstrap-grid.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('gigaland-nft/css/bootstrap-reboot.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('gigaland-nft/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('gigaland-nft/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('gigaland-nft/css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('gigaland-nft/css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('gigaland-nft/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('gigaland-nft/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('gigaland-nft/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('gigaland-nft/css/colors/scheme-01.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('gigaland-nft/css/coloring.css') }}" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/style.css') }}">
</head>

<body>
    @if (session('exceptionError'))
        <input type="hidden" name="exceptionError" value="{{ session('exceptionError') }}">
    @endif

    <div id="wrapper">
        @if (!Route::is('otp.index'))
            @include('layouts.customer.parts.header')
        @else
            @include('layouts.customer.parts.headerWithOtp')
        @endif

        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            @yield('content')
        </div>

        @if (!Route::is('otp.index'))
            @include('layouts.customer.parts.footer')
        @endif
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('gigaland-nft/js/jquery.min.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/wow.min.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/easing.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/validation.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/enquire.min.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/jquery.lazy.plugins.min.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/designesia.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/particles.js') }}"></script>
    <script src="{{ asset('gigaland-nft/js/particles-settings-2.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.all.min.js"></script>

    <script>
        const exceptionErr = $("input[name='exceptionError']");
        if (exceptionErr.length) {
            Swal.fire({
                icon: "error",
                title: exceptionErr.val(),
                confirmButtonText: "Đóng"
            });
        }
    </script>

    <script src="{{ asset('custom/js/login.js') }}"></script>
</body>

</html>
