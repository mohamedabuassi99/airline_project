@extends('layouts.app')

@section('content')
    <header class="text-center bg-dark m-5"> <p style=" color:#fff; font-size: 60px">Welcome to out website</p></header>

<div style=" weidth: 100%; height: 600px; background-image: url('/img/air2.jpg');  background-repeat: no-repeat;background-attachment: fixed;
  background-size: cover;" >

<div class="container">
<div class="row">
<div class="col-12 ">
<form method="post" class="text-center" style="margin-top: 250px;" action="">
    @csrf
    @method('post')
    @php
   $flight = \App\Flight::all();
    @endphp


    <select class="form-control ">
    @foreach($flight as $f)
        <option name="" value="{{$f->id}}">{{$f->from_location}} - to - {{$f->to_location}} -- duration {{$f->duration}} -- departure time {{$f->departure_time}} -- arrival_time {{$f->arrival_time}}</option>
        @endforeach
    </select>
    <br>
    <a  href="{{url('Ticketreservation')}}" class="  btn btn-primary px-5 py-2" > submit trip</a>
</form>





{{--<form class="mt-5">--}}
{{--  <div class="form-row">--}}
{{--    <div class="form-group col-md-6">--}}
{{--      <label for="inputEmail4">Email</label>--}}
{{--      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">--}}
{{--    </div>--}}
{{--    <div class="form-group col-md-6">--}}
{{--      <label for="inputPassword4">Password</label>--}}
{{--      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">--}}
{{--    </div>--}}
{{--  </div>--}}
{{--  <div class="form-group">--}}
{{--    <label for="inputAddress">Address</label>--}}
{{--    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">--}}
{{--  </div>--}}
{{--  <div class="form-group">--}}
{{--    <label for="inputAddress2">Address 2</label>--}}
{{--    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">--}}
{{--  </div>--}}
{{--  <div class="form-row">--}}
{{--    <div class="form-group col-md-6">--}}
{{--      <label for="inputCity">City</label>--}}
{{--      <input type="text" class="form-control" id="inputCity">--}}
{{--    </div>--}}
{{--    <div class="form-group col-md-4">--}}
{{--      <label for="inputState">State</label>--}}
{{--      <select id="inputState" class="form-control">--}}
{{--        <option selected>Choose...</option>--}}
{{--        <option>...</option>--}}
{{--      </select>--}}
{{--    </div>--}}
{{--    <div class="form-group col-md-2">--}}
{{--      <label for="inputZip">Zip</label>--}}
{{--      <input type="text" class="form-control" id="inputZip">--}}
{{--    </div>--}}
{{--  </div>--}}
{{--  <div class="form-group">--}}
{{--    <div class="form-check">--}}
{{--      <input class="form-check-input" type="checkbox" id="gridCheck">--}}
{{--      <label class="form-check-label" for="gridCheck">--}}
{{--        Check me out--}}
{{--      </label>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--  <button type="submit" class="btn btn-primary">Sign in</button>--}}
{{--</form>--}}
</div>
</div>
</div>

</div>





@stop
