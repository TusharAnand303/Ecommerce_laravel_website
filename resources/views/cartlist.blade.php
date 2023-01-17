@extends('master')
@section('content')

  <div style="font-family: 'Mukta', sans-serif;margin-top:40px">
    <h1 style="text-align: center">Items In your <span style="color: red">cart</span> !</h1>
  </div>
<a href="/ordernow" style="margin-left: 100px" class="btn btn-success">Order Now</a>
  <div style="display: inline-block; text-align:center">
  @foreach($products as $item)
  <div style="margin-left:100px" class="row cart-divider" >
   <div class="col-sm-6" style="margin-right: -90px;margin-left:-75px">
    <a style="text-decoration: none;color:rgb(65, 65, 65)"  href="detail/{{$item->id}}">
        <img src="{{$item->gallery}}" alt="" width="300px;">
    </a>
   </div>
   <div class="col-sm-6" style="padding-right:-60px" >
    <a style="text-decoration: none;color:rgb(65, 65, 65);padding-left:60px" href="detail/{{$item->id}}">
        <h3  style="margin-top: 20px;font-weight:500">{{$item->name}}</h3>
        <h5><span style="font-size: 20px">Now @</span> <span style="font-weight: bolder;font-size:25px;color:red">₹</span>{{$item->price}}</h3>
        <p>{{$item->description}}</p>
        <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger" style="color: white">Remove from cart  <i class="fa fa-trash-o"></i></a>    
    </a>
   </div>
   
   </div>
   
  @endforeach
  </div>
  <a href="/ordernow" style="margin-left: 100px" class="btn btn-success">Order Now</a>

@endsection