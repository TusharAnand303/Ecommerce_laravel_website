@extends('master')
@section('content')
<h1 style="font-family: 'Raleway', sans-serif;text-align:center" >Login page </h1>
<form class="col-md-4 offset-4" action="login" method="POST">
  @csrf
    <div class="form-group" style="margin-top: 20px">
      <label for="exampleInputEmail1">Email address</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">LOGIN</button>
  </form>
@endsection