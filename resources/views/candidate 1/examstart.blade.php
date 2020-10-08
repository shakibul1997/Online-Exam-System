@extends('candidate 1.userheader')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card"  >
				<div class="card-header bg-success" >
				   <div class="form-row text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
          
           <h2 > Examination</h2>
 
</div>
				</div>
      </div>
      <body>
      <div class="card-body" >
      <div class="row">
      <div class="col-sm-4">
           <h3 id="showtime">Time: 3 Hrs</h3>
      </div>
      <div class="col-sm-8">
      <h3 class="text-right"><span class="js-timeout" >60:00</span></h3>
      </div>
      </div>
      </div>
</body>
      <div class="card-body">
      @if(session('finishedstatus'))
            <div class="alert alert-success">
          {{session('finishedstatus')}}
              </div>
        @endif 
     
        <form action="{{url('student/examstartfinished/add')}}" method="post">
        @csrf
        <div class="form-group">
    <div class="row">
    <div class="col">
    <label for="namefield">Name</label>
      <input type="text" id="namefield" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="col">
    <label for="InputEmail1">Email address</label>
      <input type="text" id="InputEmail1" name="email" class="form-control" placeholder="Email Adrress">
    </div>
  </div><br>
        @forelse($givenexams as $start)
      <div class="form-row">
    <div class="col">
    <h5>{{$start->question_name1}}</h5><br>
        <textarea name="answer1" id="" cols="50" rows="2"></textarea>
        <h5>{{$start->question_name2}}</h5><br>
        <textarea name="answer2" id="" cols="50" rows="2"></textarea>
        <h5>{{$start->question_name3}}</h5><br>
        <textarea name="answer3" id="" cols="50" rows="2"></textarea>
    </div>
    
    <div class="col" >
    <h5>{{$start->question_name4}}</h5><br>
        <textarea name="answer4" id="" cols="50" rows="2"></textarea>
        <h5>{{$start->question_name5}}</h5><br>
        <textarea name="answer5" id="" cols="50" rows="2"></textarea>
    </div>
  </div>
      @empty
<tr class="text-center text-success">
    <td colspan="7">No Data Avaiable</td>
    
</tr>

      @endforelse
  <button type="submit" class="btn btn-primary btn-sm btn-block ">Exam Finish</button>
</form>
     


      </form>
      @endsection