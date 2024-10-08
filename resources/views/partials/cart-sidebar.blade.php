<div class="dropdown cart-dropdown">
                <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <i class="minicart-icon"></i>
                    <span class="cart-count badge-circle">3</span>
                </a>

                <div class="cart-overlay"></div>

                <div class="dropdown-menu mobile-cart">
                    <a href="#" title="Close (Esc)" class="btn-close">×</a>

                    <div class="dropdownmenu-wrapper custom-scrollbar">
                        <div class="dropdown-cart-header">Shopping Cart</div>
                        <!-- End .dropdown-cart-header -->

                        <div class="dropdown-cart-products">
                            <div class="product">
                                <div class="product-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Ultimate 3D Bluetooth Speaker</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span> × $99.00
                                    </span>
                                </div>
                                <!-- End .product-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{ asset('assets/images/products/product-1.jpg') }}" alt="product"
                                            width="80" height="80">
                                    </a>

                                    <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                </figure>
                            </div>
                            <!-- End .product -->
                            <div class="product">
                                <div class="product-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Ultimate 3D Bluetooth Speaker</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span> × $99.00
                                    </span>
                                </div>
                                <!-- End .product-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{ asset('assets/images/products/product-1.jpg') }}" alt="product"
                                            width="80" height="80">
                                    </a>

                                    <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                </figure>
                            </div>
                            <!-- End .product -->
                            <div class="product">
                                <div class="product-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Ultimate 3D Bluetooth Speaker</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span> × $99.00
                                    </span>
                                </div>
                                <!-- End .product-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{ asset('assets/images/products/product-1.jpg') }}" alt="product"
                                            width="80" height="80">
                                    </a>

                                    <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                </figure>
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>SUBTOTAL:</span>

                            <span class="cart-total-price float-right">$134.00</span>
                        </div>
                        <!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="{{ route('cart') }}" class="btn btn-gray btn-block view-cart">View
                                Cart</a>
                            <a href="{{ route('checkout') }}" class="btn btn-dark btn-block">Checkout</a>
                        </div>
                        <!-- End .dropdown-cart-total -->
                    </div>
                    <!-- End .dropdownmenu-wrapper -->
                </div>
                <!-- End .dropdown-menu -->
            </div>
            <!-- End cart-sidebar -->
