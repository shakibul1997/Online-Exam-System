@extends('admin.header')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header bg-success">
				   <div class="form-row text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
           <h3> Add Course Category</h3>
 
</div>
				</div>
			</div>
               
<div class="card-body">
@if(session('category'))
            <div class="alert alert-success">
          {{session('category')}}
              </div>
        @endif
    
<form action="{{url('admin/coursecategory/insert')}}" method="post">
@csrf
    <div class="form-group">
    <label for="courseInput4">Course Code</label>
    <input type="text" class="form-control" name="subject_code" id="courseInput4" placeholder="Course Code">
  </div>
  <div class="form-group">
    <label for="courseInput5">Course Name</label>
    <input type="text" class="form-control" name="subject_name" id="courseInput5" placeholder="Course Name">
  </div>
  <button class="btn btn-primary">Add Category</button>
</form>

@endsection