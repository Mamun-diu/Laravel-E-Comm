@extends('master')
@section('content')

<div class="">
    <div class="container custom-product pt-3">
        <div>
            <h2>Orders List</h2>
            {{-- <a class="btn btn-info mt-3" href="{{ URL::to('/order') }}">Order Now</a> --}}
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

                            <p><span class="order-info">Product Name:</span> <small class="text-dark bg-info rounded p-1 ">{{ $product->name }}</small> </p>
                            <p><span class="order-info">Delivery Status:</span> <small class="text-dark bg-info rounded p-1 ">{{ $product->status }}</small> </p>
                            <p><span class="order-info">Payment Status:</span>  <small class="text-dark bg-info rounded p-1 ">{{ $product->payment_status }}</small></p>
                            <p><span class="order-info">Payment Method:</span> <small class="text-dark bg-info rounded p-1 ">{{ $product->payment_method }}</small></p>
                            <p><span class="order-info">Delivery Address:</span> <small class="text-dark bg-info rounded p-1 ">{{ $product->address }}</small></p>
                            <p><span class="order-info">Product Price:</span> <small class="text-dark bg-info rounded p-1 ">{{ $product->price }}</small></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        {{-- <a href="" class="btn btn-danger">Remove From Cart</a> --}}
                    </div>
                </div>

                @endforeach
            </div>
            {{-- <a class="btn btn-info mt-3" href="{{ URL::to('/order') }}">Order Now</a> --}}
        </div>
    </div>
</div>





@endsection
