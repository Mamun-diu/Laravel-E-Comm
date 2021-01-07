@extends('master')
@section('content')

<div class="">
    <div class="container custom-product pt-3">
        <div>
            <h2>Your Cart List</h2>
            <div class="trending-wrapper">
                @foreach($products as $product)
                <hr>
                <div class="row mt-3">
                    <div class="col-sm-3">
                        <a href="{{ URL::to('details/'.$product->id) }}">
                            <img class="cart-img" src="{{ $product->gallery }}" class="d-block w-100" alt="...">

                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="">
                            <p class="text-muted">{{ $product->name }}</p>
                            <small class="text-muted">{{ $product->description }}</small>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ URL::to('/remove/cart/'.$product->cart_id) }}" class="btn btn-danger">Remove From Cart</a>
                        <button class="btn btn-success">Buy Now</button>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>





@endsection