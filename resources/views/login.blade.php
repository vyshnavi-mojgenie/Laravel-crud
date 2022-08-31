@extends('layouts.master')
@section('title','new user')
@section('content')
<div class="container">
  <div class="row">

    <div class="col-5m-9 col-md-7 col-lg-5 mx-auto">
      <div class="card-body p-4 p-5m-5">
        <h5 class="card-title text-center nb-5 fw-light fs-5" >ABC BANK</h5>
        @if(session()->has('message')) 
        <h6><span style="color:red;"> {{session()->get('message')}}</span></h6>
        @endif
        <form action="{{route('do.login')}}" method="post">
          @csrf
         <h6>Log to your account</h6>
          <div class="form-floating mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder=" Email">
          </div>
          <div class="form-floating mb-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign in</button>
        </form>
        <div> <br>   <span class="psw">Don't have account yet? <a href="#">Sign Up</a></span></div>
      </div>
    </div>
  </div>
</div>


@endsection