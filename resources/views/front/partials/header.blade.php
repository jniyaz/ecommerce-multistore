{{-- header start --}}
@include('front.components.top-notification')
<header>
    <div class="header-top-wrapper-2 border-bottom-2">
        <div class="header-info-wrapper pl-200 pr-200">
            <div class="header-contact-info header-contact-info2 ">
                <ul>
                    <li><i class="pe-7s-call"></i> +60-17-0011-2233</li>
                    <li><i class="pe-7s-mail"></i> <a href="#">nlabs@outlook.com</a></li>
                </ul>
            </div>
            <div class="electronics-login-register">
                <ul>
                    <li><a href="#"><i class="pe-7s-users"></i>My Account</a></li>
                    <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="pe-7s-repeat"></i>Compare</a></li>
                    <li><a href="wishlist.html"><i class="pe-7s-like"></i>Wishlist</a></li>
                    <li><a href="#"><i class="pe-7s-flag"></i>US</a></li>
                    <li><a class="border-none" href="#"><span>$</span>USD</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom ptb-40 clearfix">
        <div class="header-bottom-wrapper pr-200 pl-200">
            <div class="logo-3">
                <a href="{{ route('home.index') }}">
                    <img src="https://nlabs.netlify.app/_nuxt/img/0d63f30.png" width="80" alt="">
                </a>
            </div>
            <div class="categories-search-wrapper categories-search-wrapper2">
                <div class="all-categories">
                    <div class="select-wrapper">
                        <select class="select">
                            <option value="">All Categories</option>
                            <option value="">Smartphones </option>
                            <option value="">Computers</option>
                            <option value="">Laptops </option>
                            <option value="">Camerea </option>
                            <option value="">Watches</option>
                            <option value="">Lights </option>
                            <option value="">Air conditioner</option>
                        </select>
                    </div>
                </div>
                <div class="categories-wrapper">
                    <form action="#">
                        <input placeholder="Enter Your key word" type="text">
                        <button type="button"> Search </button>
                    </form>
                </div>
            </div>
            <div class="header-cart-3">
                @guest
                    <a href="#"><i class="ti-shopping-cart"></i>My Cart <span>0</span></a>
                @else
                    <a href="{{ route('cart.index') }}">My Cart <span>{{ \Cart::session(auth()->id())->getContent()->count() }}</span></a>
                @endguest
                <ul class="cart-dropdown">
                    @if(count(\Cart::session(auth()->id())->getContent()) > 0)
                    @foreach (\Cart::session(auth()->id())->getContent() as $k => $item)
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h5><a href="#">{{ $item->name }}</a></h5>
                                <span>${{ $item->price }} x {{ $item->quantity }}</span>
                            </div>
                            <div class="cart-delete">
                                <a onClick="return confirm('Are you sure, to delete this item from your cart?');" href="{{ route('cart.destroy', $item->id) }}"><i class="ti-trash"></i></a>
                            </div>
                        </li>
                    @endforeach
                    <li class="cart-space">
                        <div class="cart-sub">
                            <h4>Subtotal</h4>
                        </div>
                        <div class="cart-price">
                            <h4>${{ \Cart::session(auth()->id())->getTotal() }}</h4>
                        </div>
                    </li>
                    <li class="cart-btn-wrapper">
                        <a class="cart-btn btn-hover" href="{{ route('cart.index') }}">view cart</a>
                        <a class="cart-btn btn-hover" href="{{ route('checkout.index') }}">checkout</a>
                    </li>
                    @else
                    <div><span>No Items in the cart.</span></div>
                    @endif
                </ul>
            </div>
            <div class="mobile-menu-area mobile-menu-none-block electro-2-menu">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="#">HOME</a>
                                <ul>
                                    <li><a href="index.html">Fashion</a></li>
                                    <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                    <li><a href="index-fruits.html">Fruits</a></li>
                                    <li><a href="index-book.html">book</a></li>
                                    <li><a href="index-electronics.html">electronics</a></li>
                                    <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                    <li><a href="index-food.html">food & drink</a></li>
                                    <li><a href="index-furniture.html">furniture</a></li>
                                    <li><a href="index-handicraft.html">handicraft</a></li>
                                    <li><a href="index-smart-watch.html">smart watch</a></li>
                                    <li><a href="index-sports.html">sports</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages</a>
                                <ul>
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
                            <li><a href="#">shop</a>
                                <ul>
                                    <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                    <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                    <li><a href="shop.html">grid 4 column</a></li>
                                    <li><a href="shop-grid-box.html">grid box style</a></li>
                                    <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                    <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                    <li><a href="shop-list-box.html">list box style</a></li>
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
                            </li>
                            <li><a href="#">BLOG</a>
                                <ul>
                                    <li><a href="blog.html">blog 3 colunm</a></li>
                                    <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html"> Contact  </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- header end --}}
