@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-4">

            <form id="form" action="{{ URL::to('/register') }}" method="post">
                @csrf
                <span class="alerts alert alert-danger w-100 text-center d-none"></span>

                <div class="mb-3">
                    @if ($errors->any())

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
<script>
    let form = document.querySelector('#form');
    let name = document.querySelector("input[name='name']");
    let email = document.querySelector("input[name='email']");
    let password = document.querySelector("input[name='password']");
    let alert = document.querySelector('.alerts');
    form.addEventListener('submit',function(e){
        function invalid(msg){
            alert.classList.add('d-inline-block');
            alert.classList.remove('d-none');
            alert.innerText = msg;
            setTimeout(() => {
                alert.classList.add('d-none');
                alert.classList.remove('d-inline-block');
            }, 2000);
            e.preventDefault();
        }
        if(name.value == ''){
            invalid('Name field is required');
        }else if( email.value ==''){
            invalid('Email field is required');
        }else if(password.value <= 4){
            invalid('password must be at least 5 character')
        }
    })
</script>
@endsection
