<div class="header-top">
    <div class="container">
        <div class="header-left d-none d-sm-block">
            <p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders $99+</p>
        </div>
        <!-- End .header-left -->

        <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
            <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                <a href="#">Links</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="wishlist.html">My Wishlist</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        @auth
                            <li><a href="dashboard.html">My Account</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Log In</a></li>
                            <li><a href="{{ route('register') }}" class="">Register</a></li>
                        @endauth
                    </ul>
                </div>
                <!-- End .header-menu -->
            </div>
            <!-- End .header-dropown -->

            <span class="separator"></span>

            <div class="header-dropdown">
                <a href="#"><i class="flag-us flag"></i>ENG</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                        </li>
                        <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                    </ul>
                </div>
                <!-- End .header-menu -->
            </div>
            <!-- End .header-dropown -->

            <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                <a href="#">USD</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="#">EUR</a></li>
                        <li><a href="#">USD</a></li>
                    </ul>
                </div>
                <!-- End .header-menu -->
            </div>
            <!-- End .header-dropown -->

            <span class="separator"></span>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
            </div>
            <!-- End .social-icons -->
        </div>
        <!-- End .header-right -->
    </div>
    <!-- End .container -->
</div>
<!-- End .header-top -->
