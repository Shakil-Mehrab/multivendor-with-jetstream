@extends('layouts.master')
@section('title','View Delivery Brabch')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>View Delivery Brabch</h1>
          <small>Delivery Brabch List</small>
       </div>
    </section>
    @if(Session::has('flash_message_error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_error') }}</strong>
    </div>
    @endif
    @if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_success') }}</strong>
    </div>
    @endif

    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                         <h4>View Delivery Brabch</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist">
                      <a class="btn btn-add" href="{{url('admin/add-delivery/branch')}}"> <i class="fa fa-plus"></i> Add Delivery Brabch
                         </a>
                      </div>

                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               <th>ID</th>
                               <th>Brabch Name</th>
                               <th>Slug</th>
                               <th>City</th>
                               <th>Charge</th>
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                             @foreach($categories as $category)
                            <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->city_id}}</td>
                            <td>{{$category->charge}}</td>
                               <td>
                               <a href="{{url('/admin/edit-delivery/branch/'.$category->id)}}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button>
                               <a href="{{url('/admin/delete-delivery/branch/'.$category->id)}}" class="btn btn-danger btn-sm branchDelete"><i class="fa fa-trash-o"></i> </button>
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
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
@endsection
@section('js')
<script>
 // delete
   $(document).ready( function () {
    $(".branchDelete").click(function(e){
        e.preventDefault();
        var link=$(this).attr("href");
        bootbox.confirm("Are you sure to delete",function(confirmed){
        if(confirmed){
            // alert(link)
        window.location.href=link;
        };
        });
    });
   });
</script>
@endsection
