@extends('master')
@section('content')

  <div style="font-family: 'Mukta', sans-serif;margin-top:40px">
    <h1 style="text-align: center">Result for<span style="color: red"> search</span> !</h1>
  </div>

  <div style="display: inline-flex; text-align:center">
  @foreach($products as $item)
  <div style="margin-left:100px" >
    <a style="text-decoration: none;color:rgb(65, 65, 65)"  href="detail/{{$item['id']}}">
    <img src="{{$item['gallery']}}" alt="" width="300px;">
    <p  style="margin-top: 20px;font-weight:500">{{$item['name']}}</p>
    <h3><span style="font-size: 20px">Now @</span> <span style="font-weight: bolder;font-size:25px;color:red">₹</span>{{$item['price']}}</h3>
</a>
   </div>
  @endforeach
  </div>

@endsection