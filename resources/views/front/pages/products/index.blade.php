@extends('layouts.front')

@section('content')
<div class="container">
    <div class="section-title-4 text-center mb-45">
        <h2>{{ $categoryName ?? 'All' }} Products</h2>
    </div>
    <div class="row">
        @if(count($products) > 0)
            @foreach($products as $product)
                @include('front.components.products.single')
            @endforeach
        @else
            <p>No items found.</p>
        @endif
    </div>
</div>
@endsection
