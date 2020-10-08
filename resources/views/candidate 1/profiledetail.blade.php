@extends('candidate 1/userheader')
@section('content')

<div class="container col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                            
                @forelse($users as $user)
                <div class="card-header"><h1>{{$user->name}}<br> </h1> </div>
                @empty
    <div class="text-center text-success">
        No Data Avaiable
    </div>
    @endforelse
                <div class="card-body">
                
@forelse($users as $user)
    <td><img src="{{asset('uploads/profile_picture')}}/{{$user->image}}" alt="not found " width="200px"></td> </br>
    <div class="text" style="margin-top:-130px; margin-left:210px;">     
    <h5>{{$user->name}}<br> </h5> 
      <h5>{{$user->email}}<br></h5>
      <h5>{{$user->phone}}<br></h5>
       <h5>{{$user->address1}}<br></h5>
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
    <td>{{$user->father}}</td></br>       
      <td> {{$user->mother}}</td></br>
       <td>{{$user->birth}}</td></br>
       <td>{{$user->gender}}</td></br>
       <td> {{$user->nid}}</td></br>       
       <td>{{$user->address1}}</td></br>
       <td>{{$user->address2}}</td></br>

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
       <td>{{$user->s_board}}</td></br>
       <td>{{$user->s_group}}</td></br>
       <td> {{$user->s_year}}</td></br>       
       <td> {{$user->s_roll}}</td></br>
        <td>{{$user->s_gpa}}</td></br>
         <td>N/A</td></br>
     </tr>
     <tr>
       <td>HSC</td></br>       
        <td>{{$user->h_board}}</td></br>
       <td>{{$user->h_group}}</td></br>
       <td> {{$user->h_year}}</td></br>       
       <td> {{$user->h_roll}}</td></br>
        <td>{{$user->h_gpa1}}</td></br>
        <td>N/A</td></br>
     </tr>
     <tr>
       <td>Graduation Equivalent</td></br>       
       <td> {{$user->g_university}}</td></br>
       <td>{{$user->g_department}}</td></br>
       <td>{{$user->g_year}}</td></br>
       <td>N/A</td></br>       
       <td>{{$user->g_cgpa}}</td></br>
       <td>{{$user->g_duration}}</td></br>
     </tr>
      <tr>
       <td>Masters Equivalent</td></br>       
       <td> {{$user->m_university}}</td></br>
       <td>{{$user->m_department}}</td></br>
       <td>{{$user->m_year}}</td></br>
       <td>N/A</td></br>       
       <td>{{$user->m_cgpa1}}</td></br>
       <td>{{$user->m_duration}}</td></br>
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

     <td>{{$user->postname}} </td></br>       
      <td> {{$user->lengthofservice}}</td></br>
       <td>{{$user->organization}}</td></br>
       <td>{{$user->describe}}</td></br>

  </tbody>
</table>
<table class="table table-striped">
  <thead>
   <tr>
      <th scope="col"><h5><b>Skill</b></h5></th>
    </tr>
  </thead>
  <tbody>
    
    <br> <td>{{$user->skill}}</td><br>       
  </tbody>
</table>
      @empty
    <div class="text-center text-success">
        No Data Avaiable
    </div>
    @endforelse
@endsection