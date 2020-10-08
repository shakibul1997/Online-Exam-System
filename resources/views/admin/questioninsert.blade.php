@extends('admin/header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Add Question</h1></div>
                @if(session('status'))
            <div class="alert alert-success">
          {{session('status')}}
              </div>
        @endif 
                <div class="card-body">
              
     
<form action="{{url('admin/question/insert')}}" method="post">
@csrf

    <div class="form-group">
    <label for="coursecode">Course Code</label>
      <select id="coursecode" name="course_code" class="form-control">
        <option selected>Choose Course Code</option>
        @foreach($select as $show)
        <option >{{$show->subject_code}}</option>
        @endforeach
      </select>
  </div>
 
  <div class="form-group">
  <label for="coursename">Course Name</label>
      <select id="coursename" name="course_name" class="form-control">
        <option selected>Choose Course name</option>
        @foreach($select as $show)
        <option >{{$show->subject_name}}</option>
        @endforeach
      </select>
  </div>
  <div class="form-group">
    <label for="questionInput1">Question One</label>
    <input type="text" class="form-control" name="question_name1" id="questionInput1" placeholder="Insert Question">
  </div>
  <div class="form-group">
    <label for="questionInput1">Question Two</label>
    <input type="text" class="form-control" name="question_name2" id="questionInput1" placeholder="Insert Question">
  </div>
  <div class="form-group">
    <label for="questionInput1">Question Three</label>
    <input type="text" class="form-control" name="question_name3" id="questionInput1" placeholder="Insert Question">
  </div>
  <div class="form-group">
    <label for="questionInput1">Question Four</label>
    <input type="text" class="form-control" name="question_name4" id="questionInput1" placeholder="Insert Question">
  </div>
  <div class="form-group">
    <label for="questionInput1">Question Five</label>
    <input type="text" class="form-control" name="question_name5" id="questionInput1" placeholder="Insert Question">
  </div>
  <button class="btn btn-primary">Add Question</button>
  
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection