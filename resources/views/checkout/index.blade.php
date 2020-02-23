@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
            <h3>Shipping Information:</h3>
            <form action="{{ route('orders.store') }}" method="post">
                @csrf
                {{-- @include('_errors') --}}
                <div class="form-group">
                  <label for="">Full Name</label>
                  <input type="text" name="shipping_fullname" id="" class="form-control" placeholder="Shipping Full" aria-describedby="helpId">
                  {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                </div>
                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" name="shipping_address" id="" class="form-control" placeholder="Address" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Phone</label>
                  <input type="text" name="shipping_phone" id="" class="form-control" placeholder="Phone" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">City</label>
                  <input type="text" name="shipping_city" id="" class="form-control" placeholder="City" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">State</label>
                  <input type="text" name="shipping_state" id="" class="form-control" placeholder="State" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Country</label>
                  <input type="text" name="shipping_country" id="" class="form-control" placeholder="Country" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Zip Code</label>
                  <input type="text" name="shipping_zipcode" id="" class="form-control" placeholder="Zipcode" aria-describedby="helpId">
                </div>

                <h3>Payment Methods</h3>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="payment_method" id="payment_method" value="cash_delivery" checked>
                    Cash on delivery
                  </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="payment_method" id="payment_method" value="paypal">
                    Paypal
                  </label>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" id="submit" class="btn btn-primary" value="Submit">
                  </div>
            </form>
    </div>
</div>
@endsection
