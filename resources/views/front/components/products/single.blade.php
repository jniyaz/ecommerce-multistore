<div class="col-lg-3 col-md-6">
    <div class="product-wrapper mb-30">
        <div class="product-img-3">
            <a href="#">
                <img src="/assets/img/product/electro/22.jpg" alt="">
            </a>
            <div class="hanicraft-action-position">
                <div class="hanicraft-action">
                    <a class="action-cart" title="Add To Cart" href="{{ route('cart.add', $product->id) }}">
                        <i class="pe-7s-cart"></i>
                    </a>
                    <a class="action-like" title="Wishlist" href="#">
                        <i class="pe-7s-like"></i>
                    </a>
                    <a class="action-look" href="{{ route('products.show', $product) }}">
                        <i class="pe-7s-look"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="product-content-electro2 text-center">
            <h3><a href="product-details.html">{{ $product->name }}</a></h3>
            <span>Black</span>
            <h5>${{ $product->price }}</h5>
        </div>
    </div>
</div>
