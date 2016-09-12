@extends('layouts.home')
@section('content')
  <div class="loginpage">
  <div class="container">

      <div class="row">
      <div class="col-xs-12">
        <div class="admin-form">

        <form action="{{route('login_admin')}}" method="POST">
          {{csrf_field()}}
          {{method_field('POST')}}
          <input type="email" name="email" required="" placeholder="Email">
          <input type="password" name="password" required="" placeholder="Password">
          <button type="submit">Login</button>
         </form>
          </div>
      </div>

      </div>
    </div>
  </div>
@stop