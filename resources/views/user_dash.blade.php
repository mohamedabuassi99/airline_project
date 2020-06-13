@extends('layouts.layouts')
@section('content')
<div class="content">

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
                            <th>ID</th>
                            <th>full name</th>
                            <th>email</th>
                            <th>address</th>
                            <th>phone</th>
                            <th>ticket</th>
                            <th>action</th>
                            </thead>
                            <tbody>
                            @foreach($user as $users)
                            <tr>

                              <td>{{$users->id}}</td>
                              <td>{{$users->firstname}}</td>
                                <td>{{$users->email}}</td>
                              <td>{{$users->address}}</td>
                                <td>{{$users->tel_no}}</td>
                              <td>tickets</td>

                                <td >
                                    <a href="{{url('/user/delete/'.$users->id)}}">Delete</a>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
