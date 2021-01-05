@extends('master')
@section('content')

<div class="bg-secondary">
    <div class="container custom-product pt-3">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                    $i=0;
                ?>
                @foreach($data as $value)

                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="{{ $i==0?'active':'' }}"></li>
                <?php
                    $i++;
                ?>
                @endforeach

                {{-- <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li> --}}
            </ol>
            <div class="carousel-inner">
                <?php $j=0; ?>
                @foreach($data as $product)
                <?php $j++; ?>
                <div class="carousel-item {{ $j==1?'active':'' }}" data-bs-interval="10000">
                    <img class="slider-img" src="{{ $product->gallery }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5 class="text-light">Name: {{ $product->name }} </h5>
                        <h5 class="text-light">Price: {{ $product->price }} </h5>
                        <p class="text-warning">{{ $product->description }}</p>
                    </div>
                </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</div>

@endsection
