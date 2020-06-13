@extends('layouts.layouts')

@section('content')
    <div class="content">
        <a href="{{url('/flight/view_flight')}}" class="btn badge-black" style="margin-left:30px">back</a>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Add Category</h4>
                            <p class="card-category">add new Category</p>
                        </div>
                        <div class="card-body">

                            <form action="{{ url('/flight/add_flight')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Airline id</label>
                                            <input type="text" class="form-control" name="airline_id">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Airline name</label>
                                            <input type="text" class="form-control" name="airline_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">From location</label>
                                            <input type="text" class="form-control" name="from_location">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">To location</label>
                                            <input type="text" class="form-control" name="to_location">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="">Departure time</label>
                                            <input type="datetime-local" class="form-control" name="departure_time">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="">Arrival time</label>
                                            <input type="datetime-local" class="form-control" name="arrival_time">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Duration</label>
                                            <input type="text" class="form-control" name="duration">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Total seats</label>
                                            <input type="number" class="form-control" name="total_seats">
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary pull-right">Add</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
