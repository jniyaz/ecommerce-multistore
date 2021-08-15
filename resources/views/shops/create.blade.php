@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <h3>Register Your Shop</h3>
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                <strong>{{ session('error') }}</strong>
            </div>
        @endif
        <form class="mt-3" action="{{ route('shops.store') }}" method="post">
            @csrf
            <div class="form-group">
            <label for="">Shop Name</label>
            <input required type="text" name="shopname" id="shopname" class="form-control" placeholder="" aria-describedby="helpId">
            {{-- <small id="helpId" class="text-muted">Help text</small> --}}
            </div>
            <div class="form-group">
              <label for="">Description</label>
              <textarea required class="form-control" name="description" id="description" cols="10" rows="5"></textarea>
            </div>
            <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Register">
            </div>
        </form>
    </div>
</div>
@endsection
