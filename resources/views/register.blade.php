@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-4">
            <form action="{{ URL::to('/register') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleName" class="form-label">Full Name </label>
                    <input type="text" class="form-control" name="name" id="exampleName" placeholder="Enter Name" aria - describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address </label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email" aria - describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password </label>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Register </button>
            </form>
        </div>
    </div>
</div>
@endsection
