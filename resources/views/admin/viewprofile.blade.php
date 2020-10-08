@extends('admin/header')
@section('content')
<div class="container col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
              @forelse($single_users as $single)
                <div class="card-header"><h1>{{$single->name}}<br> </h1> </div>

 @empty
    <div class="text-center text-success">
        No Data Avaiable
    </div>
    @endforelse
                <div class="card-body">
     
@forelse($single_users as $single)
    <td><img src="{{asset('uploads/profile_picture')}}/{{$single->image}}" alt="not found " width="200px"></td> </br>
    <div class="text" style="margin-top:-130px; margin-left:210px;">
     <h5>{{$single->name}}<br> </h5>     
      <h5>{{$single->email}}<br></h5>
      <h5>{{$single->phone}}<br></h5>
       <h5>{{$single->address1}}<br></h5>
    </div>
    <div>
     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Day of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Nid/Birth Registration Number</th>
      <th scope="col">Present Address</th>
      <th scope="col">Parnament Address</th>
    </tr>
  </thead>
  <tbody>
<tr>
    <td>{{$single->father}}</td></br>       
      <td> {{$single->mother}}</td></br>
       <td>{{$single->birth}}</td></br>
       <td>{{$single->gender}}</td></br>
       <td> {{$single->nid}}</td></br>       
       <td>{{$single->address1}}</td></br>
       <td>{{$single->address2}}</td></br>

    </tbody>
</table>
</tr>
</div>
<div>
  <table class="table table-bordered"style="margin-top:-600px;">
  <thead>
    <tr>
      <th scope="col">Examination Name</th>
      <th scope="col">Board/Institute</th>
      <th scope="col">Group/Subject</th>
      <th scope="col">Passing Year</th>
      <th scope="col">Roll</th>
      <th scope="col">GPA</th>
      <th scope="col">Course Duration</th>
    </tr>
    <tr>
       <td>SSC</td></br>       
       <td>{{$single->s_board}}</td></br>
       <td>{{$single->s_group}}</td></br>
       <td> {{$single->s_year}}</td></br>       
       <td> {{$single->s_roll}}</td></br>
        <td>{{$single->s_gpa}}</td></br>
         <td>N/A</td></br>
     </tr>
     <tr>
       <td>HSC</td></br>       
        <td>{{$single->h_board}}</td></br>
       <td>{{$single->h_group}}</td></br>
       <td> {{$single->h_year}}</td></br>       
       <td> {{$single->h_roll}}</td></br>
        <td>{{$single->h_gpa1}}</td></br>
        <td>N/A</td></br>
     </tr>
     <tr>
       <td>Graduation Equivalent</td></br>       
       <td> {{$single->g_university}}</td></br>
       <td>{{$single->g_department}}</td></br>
       <td>{{$single->g_year}}</td></br>
       <td>N/A</td></br>       
       <td>{{$single->g_cgpa}}</td></br>
       <td>{{$single->g_duration}}</td></br>
     </tr>
      <tr>
       <td>Masters Equivalent</td></br>       
       <td> {{$single->m_university}}</td></br>
       <td>{{$single->m_department}}</td></br>
       <td>{{$single->m_year}}</td></br>
       <td>N/A</td></br>       
       <td>{{$single->m_cgpa1}}</td></br>
       <td>{{$single->m_duration}}</td></br>
     </tr>
   </div>
  </thead>
  <tbody>
</table>
<table class="table table-striped">
  <thead>
   <tr>
      <th scope="col">Post Name</th>
      <th scope="col">Service Length</th>
      <th scope="col">Organization Name</th>
      <th scope="col">Responsibility</th>
    </tr>
  </thead>
  <tbody>

     <td>{{$single->postname}} </td></br>       
      <td> {{$single->lengthofservice}}</td></br>
       <td>{{$single->organization}}</td></br>
       <td>{{$single->describe}}</td></br>

  </tbody>
</table>
<table class="table table-striped">
  <thead>
   <tr>
      <th scope="col"><h5><b>Skill</b></h5></th>
    </tr>
  </thead>
  <tbody>
    
    <br> <td>{{$single->skill}}</td><br>       
  </tbody>
</table>
      @empty
    <div class="text-center text-success">
        No Data Avaiable
    </div>
    @endforelse
@endsection


