@extends('master')
@section('content')

<div style="text-align:center;font-family: 'Mukta', sans-serif;margin-top:-45px;margin-bottom:20px"><h1>Your <span style="color: red">Orders </span><img style="width: 120px" src="https://o.remove.bg/downloads/90e92539-fa1d-411e-8360-1a8980603d09/Thank-you-composition-with-vintage-style-on-transparent-background-PNG-removebg-preview.png" alt=""></h1></div>
<div class="container">
    <table class="table table-borderless" >
        <tbody>
          <tr>
            <th scope="row">Price of products : </th>
            <td>{{$total}} ₹ /-</td>
          </tr>
          <tr>
            <th scope="row">Tax Added :</th>
            <td>0 ₹</td>
          </tr>
          <tr>
            <th scope="row">Delivery Charges : </th>
            <td>100 ₹ /-</td>
          </tr>
          <tr>
            <th scope="row">Total amount : </th>
            <td><span style="font-weight: bold;font-size:20px">{{$total +100}} ₹ /-</span> </td>
          </tr>
        </tbody>
      </table>
      <form method="POST" action="orderplace">
        @csrf
        <div class="form-group">
          <textarea required name="address" class="form-control"  placeholder="Enter Address"></textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" value="Online" checked>
            <label class="form-check-label" for="payment">
              Online Payment (UPI)
            </label>
          </div>
          <br>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" value="Online"  checked>
            <label class="form-check-label" for="payment">
              Offline Payment
            </label>
          </div>
          <br>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" value="Online"  checked>
            <label class="form-check-label" for="payment">
              Online Payment ( Debit card/Credit Card )
            </label>
          </div>
          <br>
        <button type="submit" class="btn btn-success">Order Now</button>
      </form>
</div>
@endsection