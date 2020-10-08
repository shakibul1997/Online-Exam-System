<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Auth;
use App\User;
use App\UserProfile;
use App\EducationInfo;
use App\JobInfo;
use App\QuestionAdd;
use App\AnswershitSubmit;
use App\CourseCategory;

use Image;
class UserController extends Controller
{


 /* Show only User panel */

    public function userprofile(){
    	return view('candidate 1/userprofile');
    }
     

    public function userprofileadd(Request $request){

     $request->validate([
         'name'=>'required',
        'father'=>'required',
         'mother'=>'required',
         'gender'=>'required',
         'mobile'=>'required',
         'birth'=>'required',
        'nid'=>'required',
         'address1'=>'required',
         'address2'=>'required',
         'image'=>'required',
        's_roll'=>'required',
        's_group'=>'required',
         's_year'=>'required',
         's_board'=>'required',
         's_gpa'=>'required',
         'h_roll'=>'required',
        'h_group'=>'required',
         'h_year'=>'required',
         'h_board'=>'required',
         'h_gpa1'=>'required',
         'g_university'=>'required',
        'g_department'=>'required',
        'g_year'=>'required',
        'g_duration'=>'required',
        'g_cgpa'=>'required',
        'm_university'=>['nullable','present'],
        'm_department'=>['nullable','present'],
        'm_year'=>['nullable','present'],
        'm_duration'=>['nullable','present'],
        'm_cgpa1'=>['nullable','present'],
        'postname'=>['nullable','present'],
        'lengthofservice'=>['nullable','present'],
        'organization'=>['nullable','present'],
        'describe'=>['nullable','present'],
        'skill'=>'required',

        ]);


       $insert_id=UserProfile::insertGetId( [
        'name'=>$request->name,
        'father'=>$request->father,
        'mother'=>$request->mother,
        'gender'=>$request->gender,
        'mobile'=>$request->mobile,
        'birth'=>$request->birth,
        'nid'=>$request->nid,
        'address1'=>$request->address1,
        'address2'=>$request->address2,
        's_roll'=>$request->s_roll,
        's_group'=>$request->s_group,
        's_year'=>$request->s_year,
        's_board'=>$request->s_board,
        's_gpa'=>$request->s_gpa,
        'h_roll'=>$request->h_roll,
        'h_group'=>$request->h_group,
        'h_year'=>$request->h_year,
        'h_board'=>$request->h_board,
        'h_gpa1'=>$request->h_gpa1,
        'g_university'=>$request->g_university,
        'g_department'=>$request->g_department,
        'g_year'=>$request->g_year,
        'g_duration'=>$request->g_duration,
        'g_cgpa'=>$request->g_cgpa,
        'm_university'=>$request->m_university,
        'm_department'=>$request->m_department,
        'm_year'=>$request->m_year,
        'm_duration'=>$request->m_duration,
        'm_cgpa1'=>$request->m_cgpa1,
        'postname'=>$request->postname,
        'lengthofservice'=>$request->lengthofservice,
        'organization'=>$request->organization,
        'describe'=>$request->describe,
        'skill'=>$request->skill,
           
       ]);

       if($request->hasFile('image')){
        $upload_photo=$request->image;
    $filename=$insert_id.".".$upload_photo->getClientOriginalExtension();
     Image::make($upload_photo)->resize(300, 200)->save(base_path('public/uploads/profile_picture/'.$filename));
     UserProfile::find($insert_id)->update([
  'image'=>$filename
     ]);
       }
       return back()->with('status','Profile Created Successfully');
    }
    function userdatashow(){
      $id=Auth::id();
      User::find($id);
    return view('candidate 1/showdata');
   }
   function profiledetail(){
      return view('candidate 1/profiledetail');
     }
    public function profiledetailshow($user_id){
      $users=DB::table('users')->where('user_profiles.id', $user_id)->join('user_profiles','users.phone','user_profiles.mobile')->select('users.*','user_profiles.*')->get();
      return  view('candidate 1/profiledetail',compact('users'));
  }

  function profileupdate($user_id){
   $update=DB::table('users')->where('user_profiles.id', $user_id)->join('user_profiles','users.id','user_profiles.id')->select('users.*','user_profiles.*')->get();
      return  view('candidate 1/profileupdate',compact('update'));
  }

  function userprofileupdate(Request $request){
   UserProfile::find($request->user_id)->update([
   
         'name'=>$request->name,
         'father'=>$request->father,
         'mother'=>$request->mother,               
         'gender'=>$request->gender,
         'mobile'=>$request->mobile,
         'birth'=>$request->birth,
         'nid'=>$request->nid,
         'address1'=>$request->address1,
         'address2'=>$request->address2,
         's_roll'=>$request->s_roll,
         's_group'=>$request->s_group,
         's_year'=>$request->s_year,
         's_board'=>$request->s_board,
         's_gpa'=>$request->s_gpa,
         'h_roll'=>$request->h_roll,
         'h_group'=>$request->h_group,
         'h_year'=>$request->h_year,
         'h_board'=>$request->h_board,
         'h_gpa1'=>$request->h_gpa1,
         'g_university'=>$request->g_university,
         'g_department'=>$request->g_department,
         'g_year'=>$request->g_year,
         'g_duration'=>$request->g_duration,
         'g_cgpa'=>$request->g_cgpa,
         'm_university'=>$request->m_university,
         'm_department'=>$request->m_department,
         'm_year'=>$request->m_year,
         'm_duration'=>$request->m_duration,
         'm_cgpa1'=>$request->m_cgpa1,
         'postname'=>$request->postname,
         'lengthofservice'=>$request->lengthofservice,
         'organization'=>$request->organization,
         'describe'=>$request->describe,
         'skill'=>$request->skill,   
        ]);
        return back()->with('status','Profile Update Successfully');
     }
     function givenexam( ){
            $exams=CourseCategory::where('status' , '1')->simplePaginate(20);
            return view('candidate 1/givenexam',compact('exams')); 
      
     }
       public function givenexamstart($id){
         $givenexams=DB::table('course_categories')->where('course_categories.id',$id)->join('question_adds','course_categories.subject_code','question_adds.course_code')->select('course_categories.*','question_adds.*')->get();
         return  view('candidate 1/examstart',compact('givenexams'));
     }

    //  public function examstart(){
    //    return view ('candidate 1/examfinished');
    //  }

     public function givenexamfinished(Request $request){
         AnswershitSubmit::insert([
          'name'=>$request->name,
          'email'=>$request->email,
         'answer1'=>$request->answer1,
         'answer2'=>$request->answer2,
         'answer3'=>$request->answer3,
         'answer4'=>$request->answer4,
         'answer5'=>$request->answer5,

         ]);
         return back()->with('finishedstatus','Exam  Successfully Finished');
     }
     
    
}
