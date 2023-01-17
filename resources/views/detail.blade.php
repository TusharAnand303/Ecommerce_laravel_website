@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6" style="margin-top: 50px">
            <a href="/" style="text-decoration: none;color:black;margin-right:10px">Go Back</a><i class="fa fa-angle-double-left" style="font-size:24px"></i>
            <h2 style="margin-top:10px">{{$product['name']}}</h2>
            <h3><span style="font-weight: bolder;font-size:30px;color:red">₹</span> {{$product['price']}}</h3>
            <p style="margin-top: 20px"><span style="font-weight: bold">Product Description :</span> <br>{{$product['description']}}</p>
            <h6>Category : {{$product['category']}}</h6>
            <br>
            <div style="display: inline-flex;" >
                <form action="/add_to_cart" method="POST" style="margin-right: 20px">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-dark">Add to cart</button>
                </form>
                <form action="">
                    {{-- <button class="btn btn-danger">Buy Now</button> --}}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection