@extends('master')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-6">
            <img class="details-img" src="{{ $product->gallery }}" alt="">
        </div>
        <div class="col-sm-6">
            <a class="btn btn-primary" href="/">Go Back</a>
            <h2>Name: {{ $product->name }}</h2>
            <h3>Price: {{ $product->price }}</h3>
            <h4>Category: {{ $product->category }}</h4>
            <p class="lead">Description: {{ $product->description }}</p>
            <br><br>
            <form action="{{ URL::to('/add_to_cart') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            
        </div>
    </div>
</div>





@endsection
