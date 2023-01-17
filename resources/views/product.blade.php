@extends('master')
@section('content')

 <div style="text-align:center;font-family: 'Mukta', sans-serif;margin-top:-45px;margin-bottom:20px"><h1>Latest Products <span style="color: red">Offers</span><img style="width: 120px" src="https://www.pngmart.com/files/9/Special-Offer-Transparent-PNG.png" alt=""></h1></div>
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
        <img class="slider-img" class="d-block w-100" src="{{$item['gallery']}}" alt="First slide">
      <div class="carousel-caption">
        <h3 class="namee">{{$item['name']}}</h3>
        <h4 class="price">Get low as <span style="font-weight: bolder;font-size:25px;color:red">₹</span> {{$item['price']}}</h4>
        <p class="pdesc">{{$item['description']}}</p>
      </div>
      </a>
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <div style="font-family: 'Mukta', sans-serif;margin-top:40px">
    <h1 style="text-align: center">Top Trending Products <img style="width: 100px;margin-bottom:30px" src="https://cdn.pixabay.com/photo/2016/06/15/00/47/deal-1457947__340.png" alt=""> <span style="color: red">Offers</span></h1>
  </div>

  <div style="display: inline-flex; text-align:center">
  @foreach($products as $item)
  <div style="margin-left:100px" >
    <a style="text-decoration: none;color:rgb(65, 65, 65)"  href="detail/{{$item['id']}}">
    <img src="{{$item['gallery']}}" alt="" width="300px;">
    <p  style="margin-top: 20px;font-weight:500">{{$item['name']}}</p>
    </a>
   </div>
  @endforeach
  </div>

@endsection