@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-4">
            <form action="{{ URL::to('/login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address </label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email" aria - describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password </label>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Login </button>
            </form>
            <div class=""></div>
        </div>
    </div>
</div>
@endsection
