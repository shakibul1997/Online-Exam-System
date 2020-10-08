@extends('Admin.header')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header bg-success">
					@foreach($questionshows as $view)

                    {{$view->subject_code}}<br>
                   {{$view->subject_name}}
                    @endforeach
                    </div>
    
                    <div class="card-body">
                          </div>
               
        <table class="table table-bordered">
  <thead>
    <tr>
      <th >Question Name</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
               @forelse($questionshows as $view)
       <tr>        
       <td> {{$view->question_name1}}</td> 
       <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" {{$view->status==1 ? 'checked':''}} bn ></td>
      <td>
     
        @if($view->status==1)
        <a href="{{url('admin/question/statusinactive')}}/{{$view->id}}" class="btn btn-warning btn-xs">Disable</a>
        @else

        <a href="{{url('admin/question/statusactive')}}/{{$view->id}}" class="btn btn-info btn-xs">Enable</a>
        @endif
        <a href="" class="btn btn-primary btn-xs">Edit</a>
        <a href="" class="btn btn-danger btn-xs">Delete</a>    
      </tr>

      <tr>
      <td>{{$view->question_name2}}</td>
      <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" {{$view->status==1 ? 'checked':''}} bn ></td>
      <td>
     
        @if($view->status==1)
        <a href="{{url('admin/question/statusinactive')}}/{{$view->id}}" class="btn btn-warning btn-xs">Disable</a>
        @else

        <a href="{{url('admin/question/statusactive')}}/{{$view->id}}" class="btn btn-info btn-xs">Enable</a>
        @endif
        <a href="" class="btn btn-primary btn-xs">Edit</a>
        <a href="" class="btn btn-danger btn-xs">Delete</a>
      </tr>

      <tr>
      <td>{{$view->question_name3}}</td>
      <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" {{$view->status==1 ? 'checked':''}} bn ></td>
      <td>
     
        @if($view->status==1)
        <a href="{{url('admin/question/statusinactive')}}/{{$view->id}}" class="btn btn-warning btn-xs">Disable</a>
        @else

        <a href="{{url('admin/question/statusactive')}}/{{$view->id}}" class="btn btn-info btn-xs">Enable</a>
        @endif
        <a href="" class="btn btn-primary btn-xs">Edit</a>
        <a href="" class="btn btn-danger btn-xs">Delete</a>
      </tr>

      <tr>
      <td>{{$view->question_name4}}</td>
      <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" {{$view->status==1 ? 'checked':''}} bn ></td>
      <td>
     
        @if($view->status==1)
        <a href="{{url('admin/question/statusinactive')}}/{{$view->id}}" class="btn btn-warning btn-xs">Disable</a>
        @else

        <a href="{{url('admin/question/statusactive')}}/{{$view->id}}" class="btn btn-info btn-xs">Enable</a>
        @endif
        <a href="" class="btn btn-primary btn-xs">Edit</a>
        <a href="" class="btn btn-danger btn-xs">Delete</a>
      </tr>

      <tr>
      <td> {{$view->question_name5}}</td>
      <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" {{$view->status==1 ? 'checked':''}} bn ></td>
      <td>
     
        @if($view->status==1)
        <a href="{{url('admin/question/statusinactive')}}/{{$view->id}}" class="btn btn-warning btn-xs">Disable</a>
        @else

        <a href="{{url('admin/question/statusactive')}}/{{$view->id}}" class="btn btn-info btn-xs">Enable</a>
        @endif
        <a href="" class="btn btn-primary btn-xs">Edit</a>
        <a href="" class="btn btn-danger btn-xs">Delete</a>
      </tr>
 

      @empty
    <tr class="text-center text-success">
        <td colspan="7">No Data Avaiable</td>
    </tr>
      @endforelse
      
        @endsection