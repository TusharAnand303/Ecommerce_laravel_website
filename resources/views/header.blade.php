<?php 
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){

  $total = ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" style="margin-bottom: 60px">
    <a class="navbar-brand" href="/">E-Commerce Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/myorder">Orders <span class="sr-only">(current)</span></a>
          </li>
          <form action="/search" class="form-inline my-2 my-lg-0" style="margin-left: 20px">
            <input style="width:350px" autocomplete="off" name="query" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          
      </ul>
     <ul class="navbar-nav mr-left" style="margin-right: 70px">
        <li class="nav-item active">
            <a class="nav-link" href="/cartlist"><i class="fa fa-shopping-cart" style="font-size:18px;color:white;margin-right:10px"></i>Cart Items ({{$total}}) <span class="sr-only">(current)</span></a>
          </li>
          @if(Session::has('user'))
          <li class="nav-item dropdown" style="margin-right: -10px">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             {{Session::get('user')['name']}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/logout">LOGOUT</a>
          </li>
          @else
          <li><a style="margin-left: 30px" href="/login"><button class="btn btn-danger">LOGIN</button></a></li>
          @endif
     </ul>
    </div>
  </nav>
  