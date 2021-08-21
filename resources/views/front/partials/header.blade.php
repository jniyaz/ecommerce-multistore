@include('front.components.top-notification')
@include('front.components.alerts')
{{-- header start --}}
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
                    {{-- <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="pe-7s-repeat"></i>Compare</a></li> --}}
                    <li><a href="#"><i class="pe-7s-like"></i>Wishlist</a></li>
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
            @include('front.components.nav-search')
            <livewire:cart.navcart  />
            <div class="mobile-menu-area mobile-menu-none-block electro-2-menu">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="#">HOME</a>
                                <ul>
                                    <li><a href="#">Smart Phones</a></li>
                                    <li><a href="#">Laptops</a></li>
                                </ul>
                            </li>
                            <li><a href="#">shop</a>
                                <ul>
                                    <li><a href="#">Iphone</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Pixel</a></li>
                                    <li><a href="#">OnePlus</a></li>
                                    <li><a href="#">Dell</a></li>
                                    <li><a href="#">Microsoft</a></li>
                                </ul>
                            </li>
                            <li><a href="#">BLOG</a></li>
                            <li><a href="#"> Contact  </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- header end --}}
