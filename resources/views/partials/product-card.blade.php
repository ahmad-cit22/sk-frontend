<div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
    <figure>
        <a href="{{ route('single-product', 1) }}">
            <img src="{{ asset('assets/images/products') }}/product-1.jpg" width="280" height="280" alt="product" />
            <img src="{{ asset('assets/images/products') }}/product-1-2.jpg" width="280" height="280" alt="product" />
        </a>
        <div class="label-group">
            <div class="product-label label-hot">HOT</div>
            <div class="product-label label-sale">-20%</div>
        </div>
    </figure>
    <div class="product-details">
        <div class="category-list">
            <a href="{{ route('shop') }}" class="product-category">Category</a>
        </div>
        <h3 class="product-title">
            <a href="{{ route('single-product', 1) }}">Ultimate 3D Bluetooth Speaker</a>
        </h3>
        <div class="ratings-container">
            <div class="product-ratings">
                <span class="ratings" style="width: 80%"></span>
                <!-- End .ratings -->
                <span class="tooltiptext tooltip-top"></span>
            </div>
            <!-- End .product-ratings -->
        </div>
        <!-- End .product-container -->
        <div class="price-box">
            <del class="old-price">$59.00</del>
            <span class="product-price">$49.00</span>
        </div>
        <!-- End .price-box -->
        <div class="product-action">
            <a href="{{ route('wishlist') }}" title="Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
            <a href="{{ route('single-product', 1) }}" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i><span>SELECT
                    OPTIONS</span></a>
        </div>
    </div>
    <!-- End .product-details -->
</div>
