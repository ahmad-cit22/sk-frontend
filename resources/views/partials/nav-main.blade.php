<ul class="menu">
    <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}">Home</a>
    </li>
    <li>
        <a href="{{ route('shop') }}">Shop</a>
        <div class="megamenu megamenu-fixed-width megamenu-3cols">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#" class="nolink">VARIATION 1</a>
                    <ul class="submenu">
                        <li><a href="{{ route('shop') }}">Fullwidth Banner</a></li>
                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a>
                        </li>
                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a>
                        </li>
                        <li><a href="{{ route('shop') }}">Left Sidebar</a></li>
                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                        <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a>
                        </li>
                        <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <a href="#" class="nolink">VARIATION 2</a>
                    <ul class="submenu">
                        <li><a href="category-list.html">List Types</a></li>
                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a>
                        </li>
                        <li><a href="{{ route('shop') }}">3 Columns Products</a></li>
                        <li><a href="category-4col.html">4 Columns Products</a></li>
                        <li><a href="category-5col.html">5 Columns Products</a></li>
                        <li><a href="category-6col.html">6 Columns Products</a></li>
                        <li><a href="category-7col.html">7 Columns Products</a></li>
                        <li><a href="category-8col.html">8 Columns Products</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="menu-banner">
                        <figure>
                            <img src="{{ asset('assets/images/menu-banner.jpg') }}" width="192" height="313"
                                alt="Menu banner">
                        </figure>
                        <div class="banner-content">
                            <h4>
                                <span class="">UP TO</span><br />
                                <b class="">50%</b>
                                <i>OFF</i>
                            </h4>
                            <a href="{{ route('shop') }}" class="btn btn-sm btn-dark">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .megamenu -->
    </li>
    <li>
        <a href="{{ route('single-product', 1) }}">Products</a>
        <div class="megamenu megamenu-fixed-width">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#" class="nolink">PRODUCT PAGES</a>
                    <ul class="submenu">
                        <li><a href="product.html">SIMPLE PRODUCT</a></li>
                        <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                        <li><a href="product.html">SALE PRODUCT</a></li>
                        <li><a href="product.html">FEATURED & ON SALE</a></li>
                        <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
                        <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                        <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                        <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                    </ul>
                </div>
                <!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                    <ul class="submenu">
                        <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                        <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                        <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                        <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                        <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                        <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                        <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                        <li><a href="#">BUILD YOUR OWN</a></li>
                    </ul>
                </div>
                <!-- End .col-lg-4 -->

                <div class="col-lg-4 p-0">
                    <div class="menu-banner menu-banner-2">
                        <figure>
                            <img src="{{ asset('assets/images/menu-banner-1.jpg') }}" width="182" height="317"
                                alt="Menu banner" class="product-promo">
                        </figure>
                        <i>OFF</i>
                        <div class="banner-content">
                            <h4>
                                <span class="">UP TO</span><br />
                                <b class="">50%</b>
                            </h4>
                        </div>
                        <a href="{{ route('shop') }}" class="btn btn-sm btn-dark">SHOP NOW</a>
                    </div>
                </div>
                <!-- End .col-lg-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .megamenu -->
    </li>
    <li class="{{ request()->routeIs('wishlist') || request()->routeIs('cart') || request()->routeIs('checkout') || request()->routeIs('dashboard') || request()->routeIs('about') || request()->routeIs('contact') || request()->routeIs('login') || request()->routeIs('register') || request()->routeIs('forgot-password') || request()->routeIs('blog') ? 'active' : '' }}">
        <a href="#">Pages</a>
        <ul>
            <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
            <li><a href="{{ route('cart') }}">Shopping Cart</a></li>
            <li><a href="{{ route('checkout') }}">Checkout</a></li>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="#">Blog</a>
                <ul>
                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                    <li><a href="single.html">Blog Post</a></li>
                </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="forgot-password.html">Forgot Password</a></li>
        </ul>
    </li>
    {{-- <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li> --}}
    <li><a href="{{ route('blogs') }}">Blog</a></li>
    <li>
        <a href="#">Elements</a>
        <ul class="custom-scrollbar">
            <li><a href="element-accordions.html">Accordion</a></li>
            <li><a href="element-alerts.html">Alerts</a></li>
            <li><a href="element-animations.html">Animations</a></li>
            <li><a href="element-banners.html">Banners</a></li>
            <li><a href="element-buttons.html">Buttons</a></li>
            <li><a href="element-call-to-action.html">Call to Action</a></li>
            <li><a href="element-countdown.html">Count Down</a></li>
            <li><a href="element-counters.html">Counters</a></li>
            <li><a href="element-headings.html">Headings</a></li>
            <li><a href="element-icons.html">Icons</a></li>
            <li><a href="element-info-box.html">Info box</a></li>
            <li><a href="element-posts.html">Posts</a></li>
            <li><a href="element-products.html">Products</a></li>
            <li><a href="element-product-categories.html">Product Categories</a></li>
            <li><a href="element-tabs.html">Tabs</a></li>
            <li><a href="element-testimonial.html">Testimonials</a></li>
        </ul>
    </li>
    <li><a href="{{ route('contact') }}">Contact Us</a></li>
    <li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li>
</ul>

