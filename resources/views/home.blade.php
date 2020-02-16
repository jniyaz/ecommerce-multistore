@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($products as $item)
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="/assets/images/cat.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $item->name }}</h4>
                    <p class="card-text">Text</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Add to card</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
