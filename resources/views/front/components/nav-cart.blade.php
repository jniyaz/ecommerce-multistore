<div class="header-cart-3">
    @guest
        <a href="#"><i class="ti-shopping-cart"></i>My Cart <span>0</span></a>
    @else
        <a href="{{ route('cart.index') }}">My Cart <span>{{ \Cart::session(auth()->id())->getContent()->count() }}</span></a>
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
    @endguest
</div>
