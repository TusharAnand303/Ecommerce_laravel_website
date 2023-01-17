@extends('master')
@section('content')

  <div style="font-family: 'Mukta', sans-serif;margin-top:40px">
    <h1 style="text-align: center">Your <span style="color: red"> Orders </span> !</h1>
  </div>

  <div style="display: inline-block; text-align:center">
  @foreach($orders as $item)
  <div style="margin-left:100px" class="row cart-divider" >
   <div class="col-sm-6" style="margin-right: -90px;margin-left:-75px">
    <a style="text-decoration: none;color:rgb(65, 65, 65)"  href="detail/{{$item->id}}">
        <img src="{{$item->gallery}}" alt="" width="300px;">
    </a>
   </div>
   <div class="col-sm-6" style="padding-right:-60px" >
    <a style="text-decoration: none;color:rgb(0, 0, 0);padding-left:60px;margin-left:1000px" href="detail/{{$item->id}}">
        <h3  style="margin-top: 20px;font-weight:500">{{$item->name}}</h3>
        <h5><span style="font-size: 20px">Price</span> <span style="font-weight: bolder;font-size:25px;color:red">₹</span>{{$item->price}}</h3>
        <p>Delivery Status : {{$item->status}}</p>
        <p>Payment Status : {{$item->payment_status}}</p>
        <p>Payment Method : {{$item->payment_method}}</p>
        <p>Delivery Address : {{$item->address}}</p>
    </a>
   </div>
   
   </div>
   
  @endforeach
  </div>

@endsection