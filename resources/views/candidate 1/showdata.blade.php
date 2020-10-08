@extends('candidate 1/userheader')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-8">
			<div class="card">
				<div class="card-header bg-success">
					
				</div>

				<div class="card-body">
				      </div>
                      <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
      
    </tr>
    <td> {{Auth::user()->name}}</td>
    <td>{{Auth::user()->email}}</td>
    <td> {{Auth::user()->phone}}</td>
    <td>
    <div class="btn-group" role="group" aria-label="Basic example">
  <a href= "{{url('candidate 1/profiledetail')}}/{{Auth::user()->id}}" class="btn btn-success">Details</a></button>
  <a href= "{{url('candidate 1/profileupdate')}}/{{Auth::user()->id}}" class="btn btn-danger">Update</a></button>
</div>

      </td>
      
    
  </thead>

  <tbody>
@endsection