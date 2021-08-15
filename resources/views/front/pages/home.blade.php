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
                            <a href="{{ route('products.index', ['cid' => $category->id]) }}"><img alt="" src="/assets/img/icon-img/15.png">{{ $category->name }} @if($child->isNotEmpty())<i class="pe-7s-angle-right"></i>@endif</a>
                            @if($child->isNotEmpty())
                                <div class="category-menu-dropdown">
                                    @foreach($child as $item)
                                    <div class="category-dropdown-style category-common4 mb-40">
                                        <h4 class="categories-subtitle">
                                            <a href="{{ route('products.index', ['cid' => $item->id]) }}">{{ $item->name }}</a>
                                        </h4>
                                        <ul>
                                            @php
                                                $grandChild = \TCG\Voyager\Models\Category::where('parent_id', $item->id)->get();
                                            @endphp
                                            @if($grandChild->isNotEmpty())
                                                @foreach ($grandChild as $ch)
                                                    <li><a href="{{ route('products.index', ['cid' => $ch->id]) }}">{{ $ch->name }}</a></li>
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
                            <li><a href="#">Iphone</a></li>
                            <li><a href="#">Samsung</a></li>
                            <li><a href="#">Dell</a></li>
                            <li><a href="#">Microsoft</a></li>
                        </ul>
                    </li>
                    <li><a href="#">shop <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                        <div class="category-menu-dropdown shop-menu">
                            <div class="category-dropdown-style category-common2 mb-30">
                                <h4 class="categories-subtitle">Smart Phone</h4>
                                <ul>
                                    <li><a href="#">Iphone</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Pixel</a></li>
                                    <li><a href="#">OnePlus</a></li>
                                </ul>
                            </div>
                            <div class="category-dropdown-style category-common2 mb-30">
                                <h4 class="categories-subtitle">Laptops</h4>
                                <ul>
                                    <li><a href="#">Dell</a></li>
                                    <li><a href="#">Microsoft</a></li>
                                </ul>
                            </div>
                            <div class="mega-banner-img">
                                <a href="#">
                                    <img src="/assets/img/banner/18.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">blog</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider-4 slider-height-4 bg-img" style="background-image: url(/assets/img/slider/6.jpg)">
            <div class="container">
                <div class="slider-content-4 fadeinup-animated">
                    <h2 class="animated">Say hello! to the <br>future.</h2>
                    <h4 class="animated">Best Product With warranty  </h4>
                    <a class="electro-slider-btn btn-hover animated" href="#">buy now</a>
                </div>
            </div>
        </div>
        <div class="single-slider-4 slider-height-4 bg-img" style="background-image: url(/assets/img/slider/6.jpg)">
            <div class="container">
                <div class="slider-content-4 fadeinup-animated">
                    <h2 class="animated">Say hello! to the <br>future.</h2>
                    <h4 class="animated">Best Product With warranty  </h4>
                    <a class="electro-slider-btn btn-hover animated" href="#">buy now</a>
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
                @include('front.components.products.single')
            @endforeach
        </div>
    </div>
</div>
{{-- Todo: need to implement followinf features  --}}
{{-- <div class="banner-area wrapper-padding pt-15 pb-95 gray-bg-7">
    <div class="container">
        <div class="electro-fexible-banner bg-img" style="background-image: url(/assets/img/banner/23.jpg)">
            <div class="fexible-content fexible-content-2 ">
                <h3>Play with flexible</h3>
                <p>Multicontrol Smooth Controller, Black Color All Buttons
                    <br>are somooth, Super Shine.</p>
                <a class="btn-hover flexible-btn" href="#">Buy Now</a>
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
                            <a href="#"><img src="/assets/img/product/electro/9.jpg" alt=""></a>
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
                            <h4><a href="#">desktop C27F551</a></h4>
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
                                            <img src="/assets/img/product/electro/10.jpg" alt="">
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
                                        <h4><a href="#">Play Station</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="/assets/img/product/electro/11.jpg" alt="">
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
                                        <h4><a href="#">Joy Stick</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="/assets/img/product/electro/12.jpg" alt="">
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
                                        <h4><a href="#">Awesome Tab</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="/assets/img/product/electro/13.jpg" alt="">
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
                                        <h4><a href="#">Trimmer C27F401</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="/assets/img/product/electro/14.jpg" alt="">
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
                                        <h4><a href="#">Timer C27F500</a></h4>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-3 custom-col-3">
                                <div class="product-wrapper mb-6">
                                    <div class="product-img-4">
                                        <a href="#">
                                            <img src="/assets/img/product/electro/15.jpg" alt="">
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
                                        <h4><a href="#">Joy Stick</a></h4>
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
        <div class="androit-banner-img bg-img" style="background-image: url(/assets/img/banner/36.jpg)">
            <div class="androit-banner-content">
                <h3>Xolo Fast T2 Smartphone, Android <br>7.0 Unlocked.</h3>
                <a href="#">Buy Now →</a>
            </div>
            <div class="banner-price text-center">
                <div class="banner-price-position">
                    <span class="banner-price-new">$125.00</span>
                    <span class="banner-price-old">$199.00</span>
                </div>
            </div>
            <div class="phn-img">
                <img src="/assets/img/banner/10.png" alt="">
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
                            <img src="/assets/img/product/electro/16.jpg" alt="">
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
                            <img src="/assets/img/product/electro/17.jpg" alt="">
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
                            <img src="/assets/img/product/electro/18.jpg" alt="">
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
                            <img src="/assets/img/product/electro/19.jpg" alt="">
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
                            <img src="/assets/img/product/electro/20.jpg" alt="">
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
                            <img src="/assets/img/product/electro/21.jpg" alt="">
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
                <img src="/assets/img/brand-logo/7.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/8.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/9.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/10.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/11.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/12.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/13.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/7.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/8.png" alt="">
            </div>
        </div>
    </div>
</div> --}}
@endsection
