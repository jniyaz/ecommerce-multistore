@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="row">
            <h3>Cart Summary</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $k => $item)
                        <tr>
                            <td scope="row">{{ $item->name }}</td>
                            <td>{{ \Cart::session(auth()->id())->get($item->id)->getPriceSum() }}</td>
                            <td>
                                <form class="form-inline" action="{{ route('cart.update', $item->id) }}">
                                    <input type="number" name="quantity" min="1" max="7" value="{{ $item->quantity }}" class="form-control mr-sm-2">
                                    <button type="submit" class="btn btn-xs btn-primary">Save</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('cart.destroy', $item->id) }}" class="btn btn-xs btn-danger">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <h3>Total : ${{ \Cart::session(auth()->id())->getTotal() }}</h3>
        </div>
        <div class="row">
            <a class="btn btn-primary" href="{{ route('checkout.index') }}">Proceed to checkout</a>
        </div>
    </div>
</div>
@endsection
