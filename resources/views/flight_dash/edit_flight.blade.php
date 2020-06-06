@extends('layouts.layouts')

@section('content')
      <div class="content">
          <a href="/category/view_category" class="btn badge-black"  style="margin-left:30px">back</a>

          <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Category</h4>
                  <p class="card-category">edit  Category</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{ url('/flight_dash/edit_category/'.$category_details->id)}}" >
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category Name</label>
                          <input type="text" class="form-control" name="name" value="{{$category_details->name}}">
                        </div>
                      </div>
                    </div>

                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Category</label>
                                  <select class="form-control" name="parent_id"  >
                                      <option value="0">Main Category</option>
                                      @foreach($level as $val)
                                          <option value="{{$val->id}}"
                                                  selected>{{$val->name}}</option>

                                      @endforeach
                                  </select>

                              </div>
                          </div>
                      </div>


                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Url</label>
                          <input type="text" class="form-control" name="url" value="{{$category_details->url}}">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Description</label>
                          <div class="form-group">
                            <textarea class="form-control" rows="2" name="description"> {{$category_details->description}}</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Edit Category</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@stop
