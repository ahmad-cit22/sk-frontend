@extends('layouts.frontend')

@section('content')
    <main class="main">
        <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase"
            data-owl-options="{
				'loop': false
			}">
            <div class="home-slide home-slide1 banner">
                <img class="slide-bg" src="{{ asset('assets/images/demoes/demo4/slider') }}/slideasd-1.jpg" width="1903"
                    height="499" alt="slider image">
                <div class="container d-flex align-items-center">
                    <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                        <h4 class="text-transform-none m-b-3">Find the Boundaries. Push Through!</h4>
                        <h2 class="text-transform-none mb-0">Summer Sale</h2>
                        <h3 class="m-b-3">70% Off</h3>
                        <h5 class="d-inline-block mb-0">
                            <span>Starting At</span>
                            <b class="coupon-sale-text text-white bg-secondary align-middle"><sup>$</sup><em
                                    class="align-text-top">199</em><sup>99</sup></b>
                        </h5>
                        <a href="{{ route('shop') }}" class="btn btn-dark btn-lg">Shop Now!</a>
                    </div>
                    <!-- End .banner-layer -->
                </div>
            </div>
            <!-- End .home-slide -->

            <div class="home-slide home-slide2 banner banner-md-vw">
                <img class="slide-bg" style="background-color: #ccc;" width="1903" height="499"
                    src="{{ asset('assets/images/demoes/demo4/slider') }}/slide-2.jpg" alt="slider image">
                <div class="container d-flex align-items-center">
                    <div class="banner-layer d-flex justify-content-center appear-animate"
                        data-animation-name="fadeInUpShorter">
                        <div class="mx-auto">
                            <h4 class="m-b-1">Extra</h4>
                            <h3 class="m-b-2">20% off</h3>
                            <h3 class="mb-2 heading-border">Accessories</h3>
                            <h2 class="text-transform-none m-b-4">Summer Sale</h2>
                            <a href="{{ route('shop') }}" class="btn btn-block btn-dark">Shop All Sale</a>
                        </div>
                    </div>
                    <!-- End .banner-layer -->
                </div>
            </div>
            <!-- End .home-slide -->
        </div>
        <!-- End .home-slider -->

        <div class="container">
            <div class="info-boxes-slider owl-carousel owl-theme mb-2"
                data-owl-options="{
					'dots': false,
					'loop': false,
					'responsive': {
						'576': {
							'items': 2
						},
						'992': {
							'items': 3
						}
					}
				}">
                <div class="info-box info-box-icon-left">
                    <i class="icon-shipping"></i>

                    <div class="info-box-content">
                        <h4>FREE SHIPPING &amp; RETURN</h4>
                        <p class="text-body">Free shipping on all orders over $99.</p>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <!-- End .info-box -->

                <div class="info-box info-box-icon-left">
                    <i class="icon-money"></i>

                    <div class="info-box-content">
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p class="text-body">100% money back guarantee</p>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <!-- End .info-box -->

                <div class="info-box info-box-icon-left">
                    <i class="icon-support"></i>

                    <div class="info-box-content">
                        <h4>ONLINE SUPPORT 24/7</h4>
                        <p class="text-body">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <!-- End .info-box -->
            </div>
            <!-- End .info-boxes-slider -->

            <div class="banners-container mb-2">
                <div class="banners-slider owl-carousel owl-theme" data-owl-options="{
						'dots': false
					}">
                    <div class="banner banner1 banner-sm-vw d-flex align-items-center appear-animate"
                        style="background-color: #ccc;" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                        <figure class="w-100">
                            <img src="{{ asset('assets/images/demoes/demo4/banners') }}/banner-1.jpg" alt="banner"
                                width="380" height="175" />
                        </figure>
                        <div class="banner-layer">
                            <h3 class="m-b-2">Porto Watches</h3>
                            <h4 class="m-b-3 text-primary"><sup class="text-dark"><del>20%</del></sup>30%<sup>OFF</sup></h4>
                            <a href="{{ route('shop') }}" class="btn btn-sm btn-dark">Shop Now</a>
                        </div>
                    </div>
                    <!-- End .banner -->

                    <div class="banner banner2 banner-sm-vw text-uppercase d-flex align-items-center appear-animate"
                        data-animation-name="fadeInUpShorter" data-animation-delay="200">
                        <figure class="w-100">
                            <img src="{{ asset('assets/images/demoes/demo4/banners') }}/banner-2.jpg"
                                style="background-color: #ccc;" alt="banner" width="380" height="175" />
                        </figure>
                        <div class="banner-layer text-center">
                            <div class="row align-items-lg-center">
                                <div class="col-lg-7 text-lg-right">
                                    <h3>Deal Promos</h3>
                                    <h4 class="pb-4 pb-lg-0 mb-0 text-body">Starting at $99</h4>
                                </div>
                                <div class="col-lg-5 text-lg-left px-0 px-xl-3">
                                    <a href="{{ route('shop') }}" class="btn btn-sm btn-dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .banner -->

                    <div class="banner banner3 banner-sm-vw d-flex align-items-center appear-animate"
                        style="background-color: #ccc;" data-animation-name="fadeInRightShorter" data-animation-delay="500">
                        <figure class="w-100">
                            <img src="{{ asset('assets/images/demoes/demo4/banners') }}/banner-3.jpg" alt="banner"
                                width="380" height="175" />
                        </figure>
                        <div class="banner-layer text-right">
                            <h3 class="m-b-2">Handbags</h3>
                            <h4 class="m-b-2 text-secondary text-uppercase">Starting at $99</h4>
                            <a href="{{ route('shop') }}" class="btn btn-sm btn-dark">Shop Now</a>
                        </div>
                    </div>
                    <!-- End .banner -->
                </div>
            </div>
        </div>
        <!-- End .container -->

        <section class="featured-products-section">
            <div class="container">
                <h2 class="section-title heading-border ls-20 border-0">Featured Products</h2>

                <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center"
                    data-owl-options="{
						'dots': false,
						'nav': true
					}">
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                </div>
                <!-- End .featured-proucts -->
            </div>
        </section>

        <section class="new-products-section">
            <div class="container">
                <h2 class="section-title heading-border ls-20 border-0">New Arrivals</h2>

                <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center mb-2"
                    data-owl-options="{
						'dots': false,
						'nav': true,
						'responsive': {
							'992': {
								'items': 4
							},
							'1200': {
								'items': 5
							}
						}
					}">
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                    @include('partials.product-card')
                </div>
                <!-- End .featured-proucts -->

                <div class="banner banner-big-sale appear-animate" data-animation-delay="200"
                    data-animation-name="fadeInUpShorter"
                    style="background: #2A95CB center/cover url('{{ asset('assets/images/demoes/demo4/banners/banner-4.jpg') }}');">
                    <div class="banner-content row align-items-center mx-0">
                        <div class="col-md-9 col-sm-8">
                            <h2 class="text-white text-uppercase text-center text-sm-left ls-n-20 mb-md-0 px-4">
                                <b class="d-inline-block mr-3 mb-1 mb-md-0">Big Sale</b> All new fashion brands
                                items up to 70% off
                                <small class="text-transform-none align-middle">Online Purchases Only</small>
                            </h2>
                        </div>
                        <div class="col-md-3 col-sm-4 text-center text-sm-right">
                            <a class="btn btn-light btn-white btn-lg" href="{{ route('shop') }}">View Sale</a>
                        </div>
                    </div>
                </div>

                <h2 class="section-title categories-section-title heading-border border-0 ls-0 appear-animate"
                    data-animation-delay="100" data-animation-name="fadeInUpShorter">Browse Our Categories
                </h2>

                <div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer">
                    @include('partials.category-card')
                    @include('partials.category-card')
                    @include('partials.category-card')
                    @include('partials.category-card')
                    @include('partials.category-card')
                </div>
            </div>
        </section>

        <section class="feature-boxes-container">
            <div class="container appear-animate" data-animation-name="fadeInUpShorter">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box px-sm-5 feature-box-simple text-center">
                            <div class="feature-box-icon">
                                <i class="icon-earphones-alt"></i>
                            </div>

                            <div class="feature-box-content p-0">
                                <h3>Customer Support</h3>
                                <h5>You Won't Be Alone</h5>

                                <p>We really care about you and your website as much as you do. Purchasing Porto or
                                    any other theme from us you get 100% free support.</p>
                            </div>
                            <!-- End .feature-box-content -->
                        </div>
                        <!-- End .feature-box -->
                    </div>
                    <!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box px-sm-5 feature-box-simple text-center">
                            <div class="feature-box-icon">
                                <i class="icon-credit-card"></i>
                            </div>

                            <div class="feature-box-content p-0">
                                <h3>Fully Customizable</h3>
                                <h5>Tons Of Options</h5>

                                <p>With Porto you can customize the layout, colors and styles within only a few
                                    minutes. Start creating an amazing website right now!</p>
                            </div>
                            <!-- End .feature-box-content -->
                        </div>
                        <!-- End .feature-box -->
                    </div>
                    <!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box px-sm-5 feature-box-simple text-center">
                            <div class="feature-box-icon">
                                <i class="icon-action-undo"></i>
                            </div>
                            <div class="feature-box-content p-0">
                                <h3>Powerful Admin</h3>
                                <h5>Made To Help You</h5>

                                <p>Porto has very powerful admin features to help customer to build their own shop
                                    in minutes without any special skills in web development.</p>
                            </div>
                            <!-- End .feature-box-content -->
                        </div>
                        <!-- End .feature-box -->
                    </div>
                    <!-- End .col-md-4 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container-->
        </section>
        <!-- End .feature-boxes-container -->

        <section class="promo-section bg-dark" data-parallax="{'speed': 2, 'enableOnMobile': true}"
            data-image-src="{{ asset('assets/images/demoes/demo4/banners/banner-5.jpg') }}">
            <div class="promo-banner banner container text-uppercase">
                <div class="banner-content row align-items-center text-center">
                    <div class="col-md-4 ml-xl-auto text-md-right appear-animate" data-animation-name="fadeInRightShorter"
                        data-animation-delay="600">
                        <h2 class="mb-md-0 text-white">Top Fashion<br>Deals</h2>
                    </div>
                    <div class="col-md-4 col-xl-3 pb-4 pb-md-0 appear-animate" data-animation-name="fadeIn"
                        data-animation-delay="300">
                        <a href="{{ route('shop') }}" class="btn btn-dark btn-black ls-10">View Sale</a>
                    </div>
                    <div class="col-md-4 mr-xl-auto text-md-left appear-animate" data-animation-name="fadeInLeftShorter"
                        data-animation-delay="600">
                        <h4 class="mb-1 mt-1 font1 coupon-sale-text p-0 d-block ls-n-10 text-transform-none">
                            <b>Exclusive
                                COUPON</b>
                        </h4>
                        <h5 class="mb-1 coupon-sale-text text-white ls-10 p-0"><i class="ls-0">UP TO</i><b
                                class="text-white bg-secondary ls-n-10">$100</b> OFF</h5>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-section pb-0">
            <div class="container">
                <h2 class="section-title heading-border border-0 appear-animate" data-animation-name="fadeInUp">
                    Latest News</h2>

                <div class="owl-carousel owl-theme appear-animate" data-animation-name="fadeIn"
                    data-owl-options="{
						'loop': false,
						'margin': 20,
						'autoHeight': true,
						'autoplay': false,
						'dots': false,
						'items': 2,
						'responsive': {
							'0': {
								'items': 1
							},
							'480': {
								'items': 2
							},
							'576': {
								'items': 3
							},
							'768': {
								'items': 4
							}
						}
					}">
                    @include('partials.blog-card')
                    @include('partials.blog-card')
                    @include('partials.blog-card')
                    @include('partials.blog-card')
                    @include('partials.blog-card')
                </div>

                <hr class="mt-0 m-b-5">

                <div class="brands-slider owl-carousel owl-theme images-center appear-animate"
                    data-animation-name="fadeIn" data-animation-duration="500" data-owl-options="{
					'margin': 0}">
                    <img src="{{ asset('assets/images/brands') }}/brand1.png" width="130" height="56"
                        alt="brand">
                    <img src="{{ asset('assets/images/brands') }}/brand1.png" width="130" height="56"
                        alt="brand">
                    <img src="{{ asset('assets/images/brands') }}/brand1.png" width="130" height="56"
                        alt="brand">
                    <img src="{{ asset('assets/images/brands') }}/brand1.png" width="130" height="56"
                        alt="brand">
                    <img src="{{ asset('assets/images/brands') }}/brand1.png" width="130" height="56"
                        alt="brand">
                    <img src="{{ asset('assets/images/brands') }}/brand1.png" width="130" height="56"
                        alt="brand">
                </div>
                <!-- End .brands-slider -->

                <hr class="mt-4 m-b-5">

                @include('partials.product-widgets-container')
                <!-- End .row -->
            </div>
        </section>
    </main>
    <!-- End .main -->
@endsection
