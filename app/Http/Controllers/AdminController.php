<?php

namespace App\Http\Controllers;
use App\Admin;
use App\User;
use App\UserProfile;
use App\QuestionAdd;
use App\CourseCategory;
use App\AnswershitSubmit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
     public function userview()
    { 

        $all_users=  User::simplePaginate(5);
    return view('admin/user',compact('all_users'));

    }

    public function deleteuser($user_id){
        User::where('id',$user_id)->delete();
        return back()->with('deletestatus','User Deleted Successfully');
    }
    public function userprofile(){
       return view('admin/viewprofile');
    }


 function userprofileshow($user_id)
    {
  $single_users=DB::table('users')->where('user_profiles.id', $user_id)->join('user_profiles','users.phone','user_profiles.mobile')->select('users.*','user_profiles.*')->get();
       return  view('/admin/viewprofile',compact('single_users'));
    }
 public function userrestore(){
     $deleted_user=User::onlyTrashed()->get();
      return view ('admin/disableuser',compact('deleted_user'));
 }

 public function restore($user_id){

   User::onlyTrashed()->where('id',$user_id)->restore();
   return back()->with('restorestatus','User Restore Successfully');
 }
 public function questioninsert(){
  $select=DB::table('course_categories')->select('course_categories.subject_code','course_categories.subject_name')->get();
    //return view('admin/questioninsert');
    return  view('admin/questioninsert',compact('select'));
}
public function questionadd(Request $request){
 QuestionAdd::insert([
        'course_code'=>$request->course_code,
        'course_name'=>$request->course_name,
        'question_name1'=>$request->question_name1,
        'question_name2'=>$request->question_name2,
        'question_name3'=>$request->question_name3,
        'question_name4'=>$request->question_name4,
        'question_name5'=>$request->question_name5,
        
    ]);
    return back()->with('status','Question Add Successfully');
  
   }

  //  public function questionstatusinactive($question_id){
  //    $questionstatus= QuestionAdd::find($question_id);
  //    $questionstatus->status=0;
  //    $questionstatus->save();
  //    return back()->with('questionstatu','Question Inactive Successfully');

  //  }
  //  public function questionstatusactive($question_id){
  //   $questionstatus= QuestionAdd::find($question_id);
  //   $questionstatus->status=1;
  //   $questionstatus->save();
  //   return back()->with('questionstatu','Question active Successfully');

  // }
  public function coursecategoryadd(){
    return view ('admin/coursecategory');
  }
  public function coursecategoryinsert(Request $request){
         $select=CourseCategory::insert([
        'subject_code'=>$request->subject_code,
        'subject_name'=>$request->subject_name,
         ]);
         return back()->with('category','Add Course Category Successfully');
  }
  public function coursecategoryview(){
    $coursecategorys=CourseCategory::simplePaginate();
    return view('admin/coursecategoryview',compact('coursecategorys'));
      
   }
   public function coursecategorystatusinactive($question_id){
    $coursecategorys= CourseCategory::find($question_id);
    $coursecategorys->status=0;
    $coursecategorys->save();
    //timeout();
    return back()->with('questionstatu','Question Inactive Successfully');
    
  }
  public function coursecategorystatusactive($question_id){
   $coursecategorys= CourseCategory::find($question_id);
   $coursecategorys->status=1;
   $coursecategorys->save();
   //timeout();
   return back()->with('questionstatu','Question active Successfully');

 }
 public function showquestion($id){
  $questionshows=DB::table('course_categories')->where('course_categories.id',$id)->join('question_adds','course_categories.subject_code','question_adds.course_code')->select('course_categories.*','question_adds.*')->get();
  return  view('admin/questionshow',compact('questionshows'));

  
 }
 public function answershitview($id){
  $answershit= AnswershitSubmit::simplePaginate();
   return view('admin/answershitview',compact('answershit'));
 }
}