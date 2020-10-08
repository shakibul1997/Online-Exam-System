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
      <th >Student Name</th>
      <th >Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @forelse($answershit as $shit)

  <tr>
  <td>{{$shit->name}}</td>
  <td>{{$shit->email}}</td>

  </tr>

  @empty
<tr class="text-center text-success">
    <td colspan="7">No Data Avaiable</td>
    
</tr>
      @endforelse
  @endsection