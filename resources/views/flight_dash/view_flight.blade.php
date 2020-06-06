@extends('layouts.layouts')

@section('content')
    <div class="content">
        <a href="" class="btn btn-success"  style="margin-left:30px">Add Category</a>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">Category</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <th>airline_id</th>
                                <th>airline_name</th>
                                <th>discription</th>
                                <th>from_location</th>
                                <th>to_location</th>
                                <th>departure_time</th>
                                <th>arrival_time</th>
                                <th>duration</th>
                                <th>total_seats</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="">Edit</a> | <a href="">Delete</a>
                                </td>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
