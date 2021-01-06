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
            <button class="btn btn-primary">Add to Cart</button>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>





@endsection
