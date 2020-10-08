@extends('candidate 1.userheader')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header bg-success">
				   <div class="form-row text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
           <h2> Examination</h2> <p id="demo"></p>
 
</div>
				</div>
			</div>
      <div class="card-body">
         @if(session('statusubmit'))
            <div class="alert alert-success">
          {{session('statusubmit')}}
              </div>
        @endif 
<form action="" method="post">

@csrf
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Course Code</th>
      <th >Course Name</th>
      <th>Exam Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody id="form-exam">
  @forelse($exams as $exam)
    <tr>
      
      <td>{{$exam->subject_code}}</td>
      <td>{{$exam->subject_name}}</td>
      <td>N/A</td>
      <td>
      <a href="{{url('/student/examstart/add')}}/{{$exam->id}}" class="btn btn-info btn-xs">join</a>
      </td>
    </tr>
    @empty
<tr class="text-center text-success">
    <td colspan="7">No Data Avaiable</td>
    
</tr>


    @endforelse
   
</table>
   
  </div>
 
</form>

   
@endsection