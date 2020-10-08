@extends('candidate 1/userheader')
@section('content')
<div class="container">
	<div class="row">
			<div class="card">
				<div class="card-header bg-success">
					Update User Profile
				</div>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('home')}}"></a>Dashboard</li>

								<li class="breadcrumb-item"><a href="{{url('candidate 1/profiledetail')}}"></a>Create Profile</li>
                                
								<li class="breadcrumb-item"><a href="{{url('candidate 1/profiledetail')}}"></a>View Profile</li>
                                @foreach($update as $edit)
								<li class="breadcrumb-item active" aria-current="page">
                {{$edit->name}}
                                </li>
                                @endforeach
								</ol>
							</nav>
         
				<div class="card-body">
					@if(session('status'))
						<div class="alert alert-success">
					{{session('status')}}
				      </div>
				@endif
		
   		<form action="{{url('update/user/insert')}}/{{$edit->id}}" method="post">
           @csrf
           @foreach($update as $edit)	
    <div class="form-row container">
    <div class="form-group col-md-4" >
      <input type="hidden" name="user_id" value="{{$edit->id}}">
      <label for="inputname4 " style="margin-top:20px;" >Name</label>
      <input type="text" class="form-control" id="inputname4" name="name" placeholder="Name"
     value="{{$edit->name}}" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputfather4" style="margin-top:20px;">Father Name</label>
      <input type="text" class="form-control" id="inputfather4" name="father" placeholder="Father Name" value="{{$edit->father}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputmother4" style="margin-top:20px;">Mother Name</label>
      <input type="text" class="form-control" id="inputmother4" name="mother" placeholder="Mother Name" value="{{$edit->mother}}">
    </div>
  </div>
   <div class="form-row  container">
   	<div class="form-group col-md-4">
      <label for="inputgender">Gender</label>
      <select id="inputgender" class="form-control" name="gender" >
        <option selected >{{$edit->gender}}</option>
        <option>Male</option>
        <option>female</option>
        <option>Other</option>
      </select>
    </div>
  <div class="form-group col-md-4 ">
      <label for="inputmobile4">Mobile Number</label>
      <input type="number" class="form-control" id="inputmobile4" name="mobile" placeholder="Mobile Number" value="{{$edit->mobile}}">
    </div>
  <div class="form-group col-md-4 ">
      <label for="inputbirth4">Birth Of Day</label>
      <input type="date" class="form-control" id="inputbirth4" name="birth" placeholder="Birth of Day" value="{{$edit->birth}}">
    </div>
</div>
  <div class="form-row container">
	    <div class="form-group col-md-4 " style="margin-top:30px;">
      <label for="inputnid4">NID/Birth Registration Number</label>
      <input type="number" class="form-control" id="inputnid4" name="nid" placeholder="NID/Birth Registration Number" value="{{$edit->nid}}">
    </div>
 <div class="form-group col-md-4">
      <label for="inputpresent4">Present Address</label>
      <textarea class="form-control" id="inputpresent4" name="address1" placeholder="Present Address" cols="60" rows="4">{{$edit->address1}}</textarea>
    </div>

<div class="form-group col-md-4">
      <label for="inputparnament4">Parnament Address</label>
      <textarea class="form-control" id="inputparnament4" name="address2" placeholder="Parnament Address" cols="60" rows="4"> {{$edit->address2}}</textarea>
    </div>
    <h6>Your SSC / O-level Information<span>*</span></h6>
  <div class="form-row container">
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputname4" name="s_roll" placeholder="Roll" value="{{$edit->s_roll}}" >
    </div>
    <div class="form-group col-md-3">
      <select id="inputboard" class="form-control" name="s_group">
        <option selected>{{$edit->s_group}}</option>
        <option>Science</option>
        <option>Comerce</option>
        <option>Humnities</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputmother4" name="s_year" placeholder="Passing Year" value="{{$edit->s_year}}">
    </div>
    <div class="form-group col-md-2.5">
      <select id="inputboard" class="form-control" name="s_board" >
        <option selected>{{$edit->s_board}}</option>
        <option>Dhaka</option>
        <option>Rajshahi</option>
        <option>Comilla</option>
        <option>Barisal</option>
        <option>Dinajpur</option>
        <option>Rangpur</option>
        <option>Chattogram</option>
        <option>Jessore</option>
        <option>Sylhet</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputmother4" name="s_gpa" placeholder="GPA" value="{{$edit->s_gpa}}">
    </div>
  </div>
  <h6>Your HSC / A-level Information<span>*</span></h6>
  <div class="form-row container">
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputname4" name="h_roll" placeholder="Roll" value="{{$edit->h_roll}}">
    </div>
   <div class="form-group col-md-3">
      <select id="inputboard" class="form-control" name="h_group" >
        <option selected>{{$edit->h_group}}p</option>
        <option>Science</option>
        <option>Comerce</option>
        <option>Humnities</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputmother4" name="h_year" placeholder="Passing Year" value="{{$edit->h_year}}">
    </div>
    <div class="form-group col-md-2.5">
      <select id="inputboard" class="form-control" name="h_board" >
        <option selected>{{$edit->h_board}}</option>
        <option>Dhaka</option>
        <option>Rajshahi</option>
        <option>Comilla</option>
        <option>Barisal</option>
        <option>Dinajpur</option>
        <option>Rangpur</option>
        <option>Chattogram</option>
        <option>Jessore</option>
        <option>Sylhet</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputmother4" name="h_gpa1" placeholder="GPA"
      value="{{$edit->h_gpa1}}">
    </div>
  </div>
  <h6>Your Graduation Information<span>*</span></h6>
  <div class="form-row container">
    <div class="form-group col-md-3.5">
      <input type="text" class="form-control" id="inputname4" name="g_university" placeholder="University Name"  value="{{$edit->g_university}}">
    </div>
    <div class="form-group col-md-3">
      <input type="text" class="form-control" id="inputfather4" name="g_department" placeholder="Your Department/Subject Name" value="{{$edit->g_department}}">
    </div>
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputmother4" name="g_year" placeholder="Passing Year"  value="{{$edit->g_year}}">
    </div>
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputmother4" name="g_duration" placeholder="Course Duration" value="{{$edit->g_duration}}">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputmother4" name="g_cgpa" placeholder="CGPA"
      value="{{$edit->g_cgpa}}">
    </div>
  </div>
  <h6>Your Masters Information<span>*</span></h6>
  <div class="form-row container">
    <div class="form-group col-md-3.5">
      <input type="text" class="form-control" id="inputname4" name="m_university" placeholder="University Name" value="{{$edit->m_university}}">
    </div>
    <div class="form-group col-md-3">
      <input type="text" class="form-control" id="inputfather4" name="m_department" placeholder="Your Department/Subject Name" value="{{$edit->m_department}}">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputmother4" name="m_year" placeholder="Passing Year" value="{{$edit->m_year}}">
    </div>
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputmother4" name="m_duration" placeholder="Course Duration"  value="{{$edit->m_duration}}">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputmother4" name="m_cgpa1" placeholder="CGPA" value="{{$edit->m_cgpa1}}">
    </div>
  </div>
<h6><b>Professional Experience<span>*</span></b></h6>
  <div class="form-row container">
    <div class="form-group col-md-3">
      <input type="text" class="form-control" id="inputpost4" name="postname" placeholder="Designatiion/Post Name" value="{{$edit->postname}}">
    </div>
    <div class="form-group col-md-3">
      <input type="number" class="form-control" id="inputlength4" name="lengthofservice" placeholder="Service Of Length" value="{{$edit->lengthofservice}}">
    </div>
    <div class="form-group col-md-3">
      <input type="text" class="form-control" id="inputorganization4" name="organization" placeholder="Name Of Organization" value="{{$edit->organization}}" >
    </div>
     <div class="form-group col-md-3">
      <textarea class="form-control" id="inputdescribe4" name="describe" placeholder="Responsibility" cols="5" rows="4">{{$edit->describe}}</textarea>
    </div>
    <h6><b>Describe Your Skills<span>*</span></b></h6>
     <div class="form-row container">
      <textarea class="form-control" id="inputdescribe4" name="skill" placeholder="Describe Your Skills" cols="55" rows="4">{{$edit->skill}}</textarea>
    </div>
</div>
	 </div> 
  <div class="form-group container">
  <button type="submit" class="btn btn-primary " style="margin-top:20px; margin-left:460px;" >Update</button>
</form>

					
				</div>
		</div>
	</div>
</div>
</div>
@endforeach
@endsection