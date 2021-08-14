@extends('layouts.front')

@section('content')
<div class="categori-menu-wrapper2 clearfix">
    <div class="pl-200 pr-200">
        <div class="categori-style-2">
            <div class="category-heading-2">
                <h3>All Departments</h3>
                <div class="category-menu-list">
                    <ul>
                        @foreach($categories as $category)
                        @php
                            $child = \TCG\Voyager\Models\Category::where('parent_id', $category->id)->get()
                        @endphp
                        <li>
                            <a href="#"><img alt="" src="assets/img/icon-img/15.png">{{ $category->name }} @if($child->isNotEmpty())<i class="pe-7s-angle-right"></i>@endif</a>
                            @if($child->isNotEmpty())
                                <div class="category-menu-dropdown">
                                    @foreach($child as $item)
                                    <div class="category-dropdown-style category-common4 mb-40">
                                        <h4 class="categories-subtitle">{{ $item->name }}</h4>
                                        <ul>
                                            @php
                                                $grandChild = \TCG\Voyager\Models\Category::where('parent_id', $item->id)->get();
                                            @endphp
                                            @if($grandChild->isNotEmpty())
                                                @foreach ($grandChild as $c)
                                                    <li><a href="#">{{ $c->name }}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-style-4 menu-hover">
            <nav>
                <ul>
                    <li><a href="#">home <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                        <ul class="single-dropdown">
                            <li><a href="index.html">Fashion</a></li>
                            <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                            <li><a href="index-fruits.html">fruits</a></li>
                            <li><a href="index-book.html">book</a></li>
                            <li><a href="index-electronics.html">electronics</a></li>
                            <li><a href="index-electronics-2.html">electronics style 2</a></li>
                            <li><a href="index-food.html">food & drink</a></li>
                            <li><a href="index-furniture.html">furniture</a></li>
                            <li><a href="index-handicraft.html">handicraft</a></li>
                            <li><a target="_blank" href="index-smart-watch.html">smart watch</a></li>
                            <li><a href="index-sports.html">sports</a></li>
                        </ul>
                    </li>
                    <li><a href="#">page </a>
                        <ul class="single-dropdown">
                            <li><a href="about-us.html">about us</a></li>
                            <li><a href="menu-list.html">menu list</a></li>
                            <li><a href="login.html">login</a></li>
                            <li><a href="register.html">register</a></li>
                            <li><a href="cart.html">cart page</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </li>
                    <li><a href="#">shop <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                        <div class="category-menu-dropdown shop-menu">
                            <div class="category-dropdown-style category-common2 mb-30">
                                <h4 class="categories-subtitle"> shop layout</h4>
                                <ul>
                                    <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                    <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                    <li><a href="shop.html">grid 4 column</a></li>
                                    <li><a href="shop-grid-box.html">grid box style</a></li>
                                    <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                    <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                    <li><a href="shop-list-box.html">list box style</a></li>
                                    <li><a href="cart.html">shopping cart</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                </ul>
                            </div>
                            <div class="category-dropdown-style category-common2 mb-30">
                                <h4 class="categories-subtitle"> product details</h4>
                                <ul>
                                    <li><a href="product-details.html">tab style 1</a></li>
                                    <li><a href="product-details-2.html">tab style 2</a></li>
                                    <li><a href="product-details-3.html"> tab style 3</a></li>
                                    <li><a href="product-details-4.html">sticky style</a></li>
                                    <li><a href="product-details-5.html">sticky style 2</a></li>
                                    <li><a href="product-details-6.html">gallery style</a></li>
                                    <li><a href="product-details-7.html">gallery style 2</a></li>
                                    <li><a href="product-details-8.html">fixed image style</a></li>
                                    <li><a href="product-details-9.html">fixed image style 2</a></li>
                                </ul>
                            </div>
                            <div class="mega-banner-img">
                                <a href="single-product.html">
                                    <img src="assets/img/banner/18.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">blog <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                        <ul class="single-dropdown">
                            <li><a href="blog.html">blog 3 colunm</a></li>
                            <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                            <li><a href="blog-sidebar.html">blog sidebar</a></li>
                            <li><a href="blog-details.html">blog details</a></li>
                            <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider-4 slider-height-4 bg-img" style="background-image: url(assets/img/slider/6.jpg)">
            <div class="container">
                <div class="slider-content-4 fadeinup-animated">
                    <h2 class="animated">Say hello! to the <br>future.</h2>
                    <h4 class="animated">Best Product With warranty  </h4>
                    <a class="electro-slider-btn btn-hover animated" href="product-details.html">buy now</a>
                </div>
            </div>
        </div>
        <div class="single-slider-4 slider-height-4 bg-img" style="background-image: url(assets/img/slider/6.jpg)">
            <div class="container">
                <div class="slider-content-4 fadeinup-animated">
                    <h2 class="animated">Say hello! to the <br>future.</h2>
                    <h4 class="animated">Best Product With warranty  </h4>
                    <a class="electro-slider-btn btn-hover animated" href="product-details.html">buy now</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Top Products --}}
<div class="electro-product-wrapper wrapper-padding pt-85 pb-75 gray-bg-7">
    <div class="container">
        <div class="section-title-4 text-center mb-45">
            <h2>Top Products</h2>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="product-wrapper mb-30">
                        <div class="product-img-3">
                            <a href="#">
                                <img src="assets/img/product/electro/22.jpg" alt="">
                            </a>
                            <div class="hanicraft-action-position">
                                <div class="hanicraft-action">
                                    <a class="action-cart" title="Add To Cart" href="{{ route('cart.add', $product->id) }}">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="action-like" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="action-repeat" title="Compare" href="#" data-toggle="modal" data-target="#exampleCompare" >
                                        <i class="pe-7s-repeat"></i>
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
            @endforeach
        </div>
    </div>
</div>
{{-- Todo: need to implement followinf features  --}}
{{-- <div class="banner-area wrapper-padding pt-15 pb-95 gray-bg-7">
    <div class="container">
        <div class="electro-fexible-banner bg-img" style="background-image: url(assets/img/banner/23.jpg)">
            <div class="fexible-content fexible-content-2 ">
                <h3>Play with flexible</h3>
                <p>Multicontrol Smooth Controller, Black Color All Buttons
                    <br>are somooth, Super Shine.</p>
                <a class="btn-hover flexible-btn" href="product-details.html">Buy Now</a>
            </div>
        </div>
    </div>
</div>
<div class="best-selling-area pb-95 gray-bg-7">
    <div class="section-title-4 text-center mb-60">
        <h2>Best Selling</h2>
    </div>
    <div class="best-selling-product">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div class="best-selling-left">
                    <div class="product-wrapper">
                        <div class="product-img-4">
                            <a href="#"><img src="assets/img/product/electro/9.jpg" alt=""></a>
                            <div class="product-action-right">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content-5 text-center">
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                            </div>
                            <h4><a href="product-details.html">desktop C27F551</a></h4>
                            <span>Headphone</span>
                            <h5>$133.00</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="best-selling-right">
                    <div class="custom-container">
                        <div class="coustom-row-3">
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="assets/img/product/electro/10.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                        </div>
                                        <h4><a href="product-details.html">Play Station</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="assets/img/product/electro/11.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                        </div>
                                        <h4><a href="product-details.html">Joy Stick</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="assets/img/product/electro/12.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                        </div>
                                        <h4><a href="product-details.html">Awesome Tab</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="assets/img/product/electro/13.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Trimmer C27F401</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="assets/img/product/electro/14.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                        </div>
                                        <h4><a href="product-details.html">Timer C27F500</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="assets/img/product/electro/15.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-6">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Joy Stick</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="androit-banner-wrapper wrapper-padding pt-100 pb-175">
    <div class="container-fluid">
        <div class="androit-banner-img bg-img" style="background-image: url(assets/img/banner/36.jpg)">
            <div class="androit-banner-content">
                <h3>Xolo Fast T2 Smartphone, Android <br>7.0 Unlocked.</h3>
                <a href="product-details.html">Buy Now →</a>
            </div>
            <div class="banner-price text-center">
                <div class="banner-price-position">
                    <span class="banner-price-new">$125.00</span>
                    <span class="banner-price-old">$199.00</span>
                </div>
            </div>
            <div class="phn-img">
                <img src="assets/img/banner/10.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="product-area-2 wrapper-padding pt-100 pb-70 gray-bg-7">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="assets/img/product/electro/16.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="assets/img/product/electro/17.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="assets/img/product/electro/18.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="assets/img/product/electro/19.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="assets/img/product/electro/20.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="product-wrapper product-wrapper-border mb-30">
                    <div class="product-img-5">
                        <a href="#">
                            <img src="assets/img/product/electro/21.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-content-7">
                        <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                        <div class="product-rating-4">
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star yellow"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h5>$499.00</h5>
                        <div class="product-action-electro">
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="pe-7s-repeat"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-logo-area-2 wrapper-padding ptb-80 gray-bg-7">
    <div class="container-fluid">
        <div class="brand-logo-active2 owl-carousel">
            <div class="single-brand">
                <img src="assets/img/brand-logo/7.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/8.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/9.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/10.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/11.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/12.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/13.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/7.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/8.png" alt="">
            </div>
        </div>
    </div>
</div> --}}
@endsection
