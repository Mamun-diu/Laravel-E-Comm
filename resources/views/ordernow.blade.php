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
        <form action="{{ URL::to('orderplace') }}" method="post">
            @csrf
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
                    <input class="" type="radio" name="payment" value="cash">
                    <span>Cash on Delivery</span>
                </p>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
        </form>
    </div>
</div>




@endsection
