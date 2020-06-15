@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">

                <table class=" table table-dark text-center">
                    <tr>
                        <th>Airline</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Departure time</th>
                        <th>Action</th>
                    </tr>
                    @php

                        $ticket = \App\ticket::where('user_id','=',Auth::id())->get();

                        $flight = \App\Flight::all();
                        foreach($ticket as $t){
                         $s = $flight->where('id','=',$t->flight_id);

                    @endphp
                    @foreach($s as $n)

                        <tr>
                            <td>{{$n->airline_name}}</td>
                            <td>{{$n->from_location}}</td>
                            <td>{{$n->to_location}}</td>
                            <td>{{$n->departure_time}}</td>

                            <td>
                                <a href="{{url('/reomve_ticket/'.$t->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    @php


    }
                    @endphp
                </table>

            </div>
        </div>
    </div>


@stop
