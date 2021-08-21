@extends('layouts.front')

@section('content')
<div class="checkout-area ptb-100">
    <div class="container">
        <form action="{{ route('orders.store') }}" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                    <div class="checkbox-form">
                        <h3>Shipping Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="country-select">
                                    <label>Country <span class="required">*</span></label>
                                    <select name="shipping_country">
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="India">India</option>
                                        <option value="UAE">UAE</option>
                                        <option value="UK">UK</option>
                                        <option value="USA">USA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Full Name <span class="required">*</span></label>
                                    <input type="text" required name="shipping_fullname" id="" class="form-control" placeholder="Full Name" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" required name="shipping_address" id="" class="form-control" placeholder="Address" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" required name="shipping_city" id="" class="form-control" placeholder="City" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State <span class="required">*</span></label>
                                    <input type="text" required name="shipping_state" id="" class="form-control" placeholder="State" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" required name="shipping_zipcode" id="" class="form-control" placeholder="Zipcode" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address</label>
                                    <input type="email" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone  <span class="required">*</span></label>
                                    <input type="text" required name="shipping_phone" id="" class="form-control" placeholder="Phone" aria-describedby="helpId">
                                </div>
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="checkout-form-list create-acc">
                                    <input id="cbox" type="checkbox" />
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox_info" class="checkout-form-list create-account">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <label>Account password  <span class="required">*</span></label>
                                    <input type="password" placeholder="password" />
                                </div>
                            </div> --}}
                        </div>
                        {{-- <div class="different-address">
                            <div class="ship-different-title">
                                <h3>
                                    <label>Ship to a different address?</label>
                                    <input id="ship-box" type="checkbox" />
                                </h3>
                            </div>
                            <div id="ship-box-info" class="row">
                                <div class="col-md-12">
                                    <div class="country-select">
                                        <label>Country <span class="required">*</span></label>
                                        <select>
                                          <option value="volvo">bangladesh</option>
                                          <option value="saab">Algeria</option>
                                          <option value="mercedes">Afghanistan</option>
                                          <option value="audi">Ghana</option>
                                          <option value="audi2">Albania</option>
                                          <option value="audi3">Bahrain</option>
                                          <option value="audi4">Colombia</option>
                                          <option value="audi5">Dominican Republic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" placeholder="Town / City" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>State / County <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Phone  <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list mrg-nn">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                </div>
                            </div>
                        </div> --}}
                    </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (\Cart::session(auth()->id())->getContent() as $item)
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            {{ $item->name }} <strong class="product-quantity"> × {{ $item->quantity }}</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">${{ \Cart::session(auth()->id())->get($item['id'])->getPriceSum() }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount">${{ \Cart::session(auth()->id())->getSubTotal() }}</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">${{ \Cart::session(auth()->id())->getTotal() }}</span></strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        {{-- <div class="payment-accordion">
                            <div class="panel-group" id="faq">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#payment-1">Direct Bank Transfer.</a></h5>
                                    </div>
                                    <div id="payment-1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2">Cheque Payment</a></h5>
                                    </div>
                                    <div id="payment-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-3">PayPal</a></h5>
                                    </div>
                                    <div id="payment-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="checkout-form-list create-acc">
                                    <input type="checkbox" name="payment_method" id="cbox" value="cash_delivery" checked>
                                    <label>Cash on delivery</label>
                                </div>
                                {{-- <div class="checkout-form-list create-acc">
                                    <input type="checkbox" class="form-check-input" name="payment_method" id="cbox" value="paypal">
                                    <label>Paypal</label>
                                </div> --}}
                            <div class="order-button-payment">
                                <input type="submit" value="Place order" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
