@extends('layouts.front')

@section('content')
<div class="cart-main-area mt-20 mb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {{-- @if(Session::has('message'))
                    <div class="alert alert-info mt-2" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif --}}
                <h1 class="cart-heading">Cart</h1>
                <livewire:cart-component />
            </div>
        </div>
    </div>
</div>
@endsection
