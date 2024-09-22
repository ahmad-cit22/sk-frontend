<div class="top-notice bg-primary text-white">
    <div class="container text-center">
        <h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
        <a href="category.html" class="category">MEN</a>
        <a href="category.html" class="category ml-2 mr-3">WOMEN</a>
        <small>* Limited time only.</small>
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </div>
    <!-- End .container -->
</div>
<!-- End .top-notice -->

<header class="header">
    @include('partials.header-top')

    @include('partials.header-middle')

    <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
        <div class="container">
            <nav class="main-nav w-100">
                @include('partials.nav-main')
            </nav>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-bottom -->
</header>
<!-- End .header -->
