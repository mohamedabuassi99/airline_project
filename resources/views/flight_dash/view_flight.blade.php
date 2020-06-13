@extends('layouts.layouts')

@section('content')
    <div class="content">
        <a href="{{url('/flight/add_flight')}}" class="btn btn-facebook" style="margin-left:30px">Add Flight</a>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success text-center col-8 alert-success" style="margin-left: auto; margin-right: auto;">
                            <strong> {{  Session('success') }}</strong>

                        </div>


                    @endif
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Flight</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead class="text-success">
                                <th>airline_id</th>
                                <th>airline_name</th>
                                <th>from_location</th>
                                <th>to_location</th>
                                <th>departure_time</th>
                                <th>arrival_time</th>
                                <th>duration</th>
                                <th>total_seats</th>
                                <th>Action</th>
                                </thead>
                                @foreach($all_flight as $flight)

                                    <tbody>

                                    <td>{{ $flight->airline_id   }}</td>
                                    <td>{{ $flight->airline_name   }}</td>
                                    <td>{{ $flight->from_location   }}</td>
                                    <td>{{ $flight->to_location   }}</td>
                                    <td>{{ $flight->departure_time   }}</td>
                                    <td>{{ $flight->arrival_time   }}</td>
                                    <td>{{ $flight->duration   }}</td>
                                    <td>{{ $flight->total_seats   }}</td>
                                    <td>
                                        <a href="{{url('/flight/edit_flight/'.$flight->id)}}">Edit</a> | <a
                                            href="{{url('/flight/delete_flight/'.$flight->id)}}">Delete</a>
                                    </td>

                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
