@extends('Admin.header')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">All Course</div>
                @if(session('questionstatu'))
            <div class="alert alert-success">
          {{session('questionstatu')}}
              </div>
        @endif
               <div class="card-body">
        
               <table class="table table-bordered">
  <thead>
    <tr>
      <th >Course Code</th>
      <th >Course Name</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse($coursecategorys as $coursecategory)
    <tr>
      <td>{{$coursecategory->subject_code}}</td>
      <td>{{$coursecategory->subject_name}}</td>
      <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" {{$coursecategory->status==1 ? 'checked':''}} bn ></td>
      <td>
     
        @if($coursecategory->status==1)
        <a href="{{url('admin/question/statusinactive')}}/{{$coursecategory->id}}" class="btn btn-danger btn-xs">Disable</a>
        @else

        <a href="{{url('admin/question/statusactive')}}/{{$coursecategory->id}}" class="btn btn-warning btn-xs" value="click" id="timeend">Enable</a>
        @endif
        <a href="" class="btn btn-primary btn-xs">Edit</a>
        <a href="{{url('admin/questionshow')}}/{{$coursecategory->id}}" class="btn btn-info btn-xs">View</a>
        <a href="{{url('admin/answershit/view')}}/{{$coursecategory->id}}" class="btn btn-success btn-xs">Answer Shit</a>
      </td>
      
      @empty
    <tr class="text-center text-success">
        <td colspan="7">No Data Avaiable</td>
    </tr>
    @endforelse
    </tr>
  </tbody>

</table>

 <!-- {{$coursecategorys->links()}} -->

@endsection 

