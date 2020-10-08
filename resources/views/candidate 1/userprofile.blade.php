@extends('candidate 1.userheader')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header bg-success">
				   <div class="form-row text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
            <a href= "{{url('candidate 1/showdata')}}" class="btn btn-success"> Profile</a></button>
 
</div>
				</div>
			</div>
<div class="card-body">
         @if(session('status'))
            <div class="alert alert-success">
          {{session('status')}}
              </div>
        @endif

<form action="{{url('user/profile/insert')}}" method="post" enctype="multipart/form-data"> 

  @csrf
 
  <div class="form-row container">
    <div class="form-group col-md-4" >
      <input type="hidden" name="user_id">
      <label for="inputname4 " style="margin-top:20px;" >Name</label>
      <input type="text" class="form-control" id="inputname4" name="name" placeholder="Name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputfather4" style="margin-top:20px;">Father Name</label>
      <input type="text" class="form-control" id="inputfather4" name="father" placeholder="Father Name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputmother4" style="margin-top:20px;">Mother Name</label>
      <input type="text" class="form-control" id="inputmother4" name="mother" placeholder="Mother Name">
    </div>
  </div>
   <div class="form-row  container">
   	<div class="form-group col-md-4">
      <label for="inputgender">Gender</label>
      <select id="inputgender" class="form-control" name="gender">
        <option selected>Choose Your Gender</option>
        <option>Male</option>
        <option>female</option>
        <option>Other</option>
      </select>
    </div>
  <div class="form-group col-md-4 ">
      <label for="inputmobile4">Mobile Number</label>
      <input type="number" class="form-control" id="inputmobile4" name="mobile" placeholder="Mobile Number">
    </div>
  <div class="form-group col-md-4 ">
      <label for="inputbirth4">Birth Of Day</label>
      <input type="date" class="form-control" id="inputbirth4" name="birth" placeholder="Birth of Day">
    </div>
</div>
  <div class="form-row container">
	    <div class="form-group col-md-4 " style="margin-top:30px;">
      <label for="inputnid4">NID/Birth Registration Number</label>
      <input type="number" class="form-control" id="inputnid4" name="nid" placeholder="NID/Birth Registration Number">
    </div>
 <div class="form-group col-md-4">
      <label for="inputpresent4">Present Address</label>
      <textarea class="form-control" id="inputpresent4" name="address1" placeholder="Present Address" cols="60" rows="4"></textarea>
    </div>

<div class="form-group col-md-4">
      <label for="inputparnament4">Parnament Address</label>
      <textarea class="form-control" id="inputparnament4" name="address2" placeholder="Parnament Address" cols="60" rows="4"></textarea>
    </div>
    <h6>Your SSC / O-level Information<span>*</span></h6>
  <div class="form-row container">
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputname4" name="s_roll" placeholder="Roll">
    </div>
    <div class="form-group col-md-3">
      <select id="inputboard" class="form-control" name="s_group" >
        <option selected>Choose Your Group</option>
        <option>Science</option>
        <option>Comerce</option>
        <option>Humnities</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputmother4" name="s_year" placeholder="Passing Year">
    </div>
    <div class="form-group col-md-2.5">
      <select id="inputboard" class="form-control" name="s_board" >
        <option selected>Choose Your Board</option>
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
      <input type="number" class="form-control" id="inputmother4" name="s_gpa" placeholder="GPA">
    </div>
  </div>
  <h6>Your HSC / A-level Information<span>*</span></h6>
  <div class="form-row container">
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputname4" name="h_roll" placeholder="Roll">
    </div>
   <div class="form-group col-md-3">
      <select id="inputboard" class="form-control" name="h_group" >
        <option selected>Choose Your Group</option>
        <option>Science</option>
        <option>Comerce</option>
        <option>Humnities</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputmother4" name="h_year" placeholder="Passing Year">
    </div>
    <div class="form-group col-md-2.5">
      <select id="inputboard" class="form-control" name="h_board" >
        <option selected>Choose Your Board</option>
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
      <input type="text" class="form-control" id="inputmother4" name="h_gpa1" placeholder="GPA">
    </div>
  </div>
  <h6>Your Graduation Information<span>*</span></h6>
  <div class="form-row container">
    <div class="form-group col-md-3.5">
      <input type="text" class="form-control" id="inputname4" name="g_university" placeholder="University Name">
    </div>
    <div class="form-group col-md-3">
      <input type="text" class="form-control" id="inputfather4" name="g_department" placeholder="Your Department/Subject Name">
    </div>
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputmother4" name="g_year" placeholder="Passing Year">
    </div>
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputmother4" name="g_duration" placeholder="Course Duration">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputmother4" name="g_cgpa" placeholder="CGPA">
    </div>
  </div>
  <h6>Your Masters Information<span>*</span></h6>
  <div class="form-row container">
    <div class="form-group col-md-3.5">
      <input type="text" class="form-control" id="inputname4" name="m_university" placeholder="University Name">
    </div>
    <div class="form-group col-md-3">
      <input type="text" class="form-control" id="inputfather4" name="m_department" placeholder="Your Department/Subject Name">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputmother4" name="m_year" placeholder="Passing Year">
    </div>
    <div class="form-group col-md-2">
      <input type="number" class="form-control" id="inputmother4" name="m_duration" placeholder="Course Duration">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputmother4" name="m_cgpa1" placeholder="CGPA">
    </div>
  </div>
<h6><b>Professional Experience<span>*</span></b></h6>
  <div class="form-row container">
    <div class="form-group col-md-3">
      <input type="text" class="form-control" id="inputpost4" name="postname" placeholder="Designatiion/Post Name">
    </div>
    <div class="form-group col-md-3">
      <input type="number" class="form-control" id="inputlength4" name="lengthofservice" placeholder="Service Of Length">
    </div>
    <div class="form-group col-md-3">
      <input type="text" class="form-control" id="inputorganization4" name="organization" placeholder="Name Of Organization">
    </div>
     <div class="form-group col-md-3">
      <textarea class="form-control" id="inputdescribe4" name="describe" placeholder="Responsibility" cols="5" rows="4"></textarea>
    </div>
    <h6><b>Describe Your Skills<span>*</span></b></h6>
     <div class="form-row container">
      <textarea class="form-control" id="inputdescribe4" name="skill" placeholder="Describe Your Skills" cols="55" rows="4"></textarea>
    </div>
</div>
	 </div> 
			 <div class="form-row container">  
		     <div class="form-row col-md-4">
           <label for="inputbirth4">Upload Your Photo</label>
			  <input type="file" name="image" class="form-control">
			  </div>
		  </div>
  <div class="form-group container">
  <button type="submit" class="btn btn-primary " style="margin-top:20px; margin-left:460px;" >Submit</button>
</form>

@endsection
