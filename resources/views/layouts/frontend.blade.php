<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sk Corporation | @yield('title', 'Best RO Water Purifier In Bangladesh')</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    @include('partials.head-scripts')

    @include('partials.head-links')

    <!-- custom css -->
    @stack('css')
</head>

<body>
    <div class="page-wrapper">
        @include('partials.header')

        {{-- content --}}
        @yield('content')

        @include('partials.footer')
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    @include('partials.nav-mobile')

    @include('partials.newsletter-popup')

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    @include('partials.scripts')
</body>

</html>
