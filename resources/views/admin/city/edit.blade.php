@extends('layouts.master')
@section('title','Edit City')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-pencil"></i>
       </div>
       <div class="header-title">
          <h1>Edit City</h1>
          <small>Edit City</small>
       </div>
    </section>
    @if(Session::has('flash_message_error'))
   <div class="alert alert-sm alert-danger alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_error') !!}</strong>
   </div>
   @endif

   @if(Session::has('flash_message_success'))
   <div class="alert alert-sm alert-success alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_success') !!}</strong>
   </div>
   @endif
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonlist">
                      <a class="btn btn-add " href="{{url('admin/view-city')}}">
                      <i class="fa fa-eye"></i>  View City </a>
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" action="{{url('/admin/edit-city/'.$categoryDetails->id)}}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                      <div class="form-group">
                         <label>City Name</label>
                      <input type="text" class="form-control" value="{{$categoryDetails->name}}" name="name" id="name" required>
                      </div>
                      <div class="form-group">
                         <label>Country</label>
                         <select name="country_id" id="country_id" class="form-control">
                             <option value="">Select One</option>
                             @foreach($levels as $val)
                              <option value="{{$val->id}}" @if($val->id==$categoryDetails->country_id) selected @endif>{{$val->name}}</option>
                             @endforeach
                         </select>
                      </div>
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Edit Category">
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
