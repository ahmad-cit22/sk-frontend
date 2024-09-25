<aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
    <div class="sidebar-wrapper">
        <div class="widget">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true"
                    aria-controls="widget-body-2">Categories</a>
            </h3>

            <div class="collapse show" id="widget-body-2">
                <div class="widget-body">
                    <ul class="cat-list">
                        <li>
                            <a href="#widget-category-1" data-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="widget-category-1">
                                Accessories<span class="products-count">(3)</span>
                                <span class="toggle"></span>
                            </a>
                            <div class="collapse show" id="widget-category-1">
                                <ul class="cat-sublist">
                                    <li>
                                        Caps<span class="products-count">(1)</span>
                                    </li>
                                    <li>
                                        Watches<span class="products-count">(2)</span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#widget-category-2" class="collapsed" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="widget-category-2">
                                Dress<span class="products-count">(4)</span>
                                <span class="toggle"></span>
                            </a>
                            <div class="collapse" id="widget-category-2">
                                <ul class="cat-sublist">
                                    <li>
                                        Clothing<span class="products-count">(4)</span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#widget-category-3" class="collapsed" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="widget-category-3">
                                Electronics<span class="products-count">(2)</span>
                                <span class="toggle"></span>
                            </a>
                            <div class="collapse" id="widget-category-3">
                                <ul class="cat-sublist">
                                    <li>
                                        Headphone<span class="products-count">(1)</span>
                                    </li>
                                    <li>
                                        Watch<span class="products-count">(1)</span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#widget-category-4" class="collapsed" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="widget-category-4">
                                Fashion<span class="products-count">(6)</span>
                                <span class="toggle"></span>
                            </a>
                            <div class="collapse" id="widget-category-4">
                                <ul class="cat-sublist">
                                    <li>
                                        Shoes<span class="products-count">(4)</span>
                                    </li>
                                    <li>
                                        Bag<span class="products-count">(2)</span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Music</a><span class="products-count">(2)</span>
                        </li>
                    </ul>
                </div>
                <!-- End .widget-body -->
            </div>
            <!-- End .collapse -->
        </div>
        <!-- End .widget -->

        <div class="widget">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true"
                    aria-controls="widget-body-3">Price</a>
            </h3>

            <div class="collapse show" id="widget-body-3">
                <div class="widget-body pb-0">
                    <form action="#">
                        <div class="price-slider-wrapper">
                            <div id="price-slider"></div>
                            <!-- End #price-slider -->
                        </div>
                        <!-- End .price-slider-wrapper -->

                        <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                            <div class="filter-price-text">
                                Price:
                                <span id="filter-price-range"></span>
                            </div>
                            <!-- End .filter-price-text -->

                            <button type="submit" class="btn btn-primary">
                                Filter
                            </button>
                        </div>
                        <!-- End .filter-price-action -->
                    </form>
                </div>
                <!-- End .widget-body -->
            </div>
            <!-- End .collapse -->
        </div>
        <!-- End .widget -->

        <div class="widget widget-color">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true"
                    aria-controls="widget-body-4">Color</a>
            </h3>

            <div class="collapse show" id="widget-body-4">
                <div class="widget-body pb-0">
                    <ul class="config-swatch-list">
                        <li class="active">
                            <a href="#" style="background-color: #000"></a>
                        </li>
                        <li>
                            <a href="#" style="background-color: #0188cc"></a>
                        </li>
                        <li>
                            <a href="#" style="background-color: #81d742"></a>
                        </li>
                        <li>
                            <a href="#" style="background-color: #6085a5"></a>
                        </li>
                        <li>
                            <a href="#" style="background-color: #ab6e6e"></a>
                        </li>
                    </ul>
                </div>
                <!-- End .widget-body -->
            </div>
            <!-- End .collapse -->
        </div>
        <!-- End .widget -->

        <div class="widget widget-size">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true"
                    aria-controls="widget-body-5">Sizes</a>
            </h3>

            <div class="collapse show" id="widget-body-5">
                <div class="widget-body pb-0">
                    <ul class="config-size-list">
                        <li class="active"><a href="#">XL</a></li>
                        <li><a href="#">L</a></li>
                        <li><a href="#">M</a></li>
                        <li><a href="#">S</a></li>
                    </ul>
                </div>
                <!-- End .widget-body -->
            </div>
            <!-- End .collapse -->
        </div>
        <!-- End .widget -->

        <div class="widget widget-featured">
            <h3 class="widget-title">Featured</h3>

            <div class="widget-body">
                <div class="owl-carousel widget-featured-products">
                    <div class="featured-col">
                        @include('partials.product-card-mini')
                        @include('partials.product-card-mini')
                        @include('partials.product-card-mini')
                    </div>
                    <!-- End .featured-col -->

                    <div class="featured-col">
                        @include('partials.product-card-mini')
                        @include('partials.product-card-mini')
                        @include('partials.product-card-mini')
                    </div>
                    <!-- End .featured-col -->
                </div>
                <!-- End .widget-featured-slider -->
            </div>
            <!-- End .widget-body -->
        </div>
        <!-- End .widget -->
    </div>
    <!-- End .sidebar-wrapper -->
</aside>
