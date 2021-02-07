@extends('master')
@section('content')


<div class="container mt-4">
    <div class="col-sm-6">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{ $total }} Tk</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0 Tk</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>100 Tk</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{ $total + 100 }}</td>
                </tr>
            </tbody>
        </table>
        <form id="form" action="{{ URL::to('orderplace') }}" method="post">
            @csrf
            <span class="alerts alert alert-danger w-100 text-center d-none"></span>
            <div class="form-group">
                <textarea class="form-control" placeholder="Enter your address..." name="address"  rows="3"></textarea>
            </div>
            <div class="form-group my-2">
                <label  for="">Payment Method</label>
                <p class=" ">
                    <input class="" type="radio"  name="payment" value="cash">
                    <span>Online Payment</span>
                </p>
                <p class=" ">
                    <input class="" type="radio" name="payment" value="cash">
                    <span>EMI Payment</span>
                </p>
                <p class=" ">
                    <input class="" type="radio" name="payment" value="cash" checked>
                    <span>Cash on Delivery</span>
                </p>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
        </form>
    </div>
</div>

<script>
    let form = document.querySelector('#form');
    // let name = document.querySelector("input[name='name']");
    let textarea = document.querySelector("textarea[name='address']");
    // let password = document.querySelector("input[name='password']");
    let alert = document.querySelector('.alerts');
    form.addEventListener('submit',function(e){
        function trimfield(str)
        {
            return str.replace(/^\s+|\s+$/g,'');
        }
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
        if( trimfield(textarea.value) == ''){
            invalid('Address is required');
        }
    })
</script>


@endsection
