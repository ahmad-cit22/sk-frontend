<div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
    <div class="container">
        <div class="header-left col-lg-2 w-auto pl-0">
            <button class="mobile-menu-toggler text-primary mr-2" type="button">
                <i class="fas fa-bars"></i>
            </button>
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('assets/images/logo-light.png') }}" width="111" height="44" alt="Porto Logo">
            </a>
        </div>
        <!-- End .header-left -->

        <div class="header-right w-lg-max">
            @include('partials.header-search')

            <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                <img alt="phone" src="{{ asset('assets/images/phone.png') }}" width="30" height="30"
                    class="pb-1">
                <h6><span>Call us now</span><a href="tel:#" class="text-dark font1">+123 5678 890</a>
                </h6>
            </div>

            <a href="{{ route('login') }}" class="header-icon" title="login"><i class="icon-user-2"></i></a>

            <a href="{{ route('wishlist') }}" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a>

            @include('partials.cart-sidebar')
        </div>
        <!-- End .header-right -->
    </div>
    <!-- End .container -->
</div>
<!-- End .header-middle -->
