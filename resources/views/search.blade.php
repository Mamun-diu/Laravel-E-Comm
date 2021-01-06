@extends('master')
@section('content')

<div class="">
    <div class="container custom-product pt-3">
        <div>
            <h1>Search Products</h1>
            <div class="trending-wrapper">
                @foreach($products as $product)
                <div class="custom-card-group card-group mt-2 search-item ">
                    <a href="{{ URL::to('details/'.$product->id) }}">
                        <div class="custom-card card">
                            <div class="custom-card-body card-body">
                                <img class="trending-img" src="{{ $product->gallery }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="card-footer">
                                <p class="text-muted">{{ $product->name }}</p>
                                <small class="text-muted">{{ $product->description }}</small>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>





@endsection
