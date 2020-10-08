<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Admin Panel
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin','Admin\LoginController@Login');
Route::get('/user/profile', 'AdminController@userview');

Route::get('/admin/viewprofile', 'AdminController@userprofile');
Route::get('/admin/viewprofile/{user_id}', 'AdminController@userprofileshow');
Route::get('/delete/user/{user_id}','AdminController@deleteuser');
Route::get('/admin/user/restore', 'AdminController@userrestore');
Route::get('/admin/user/restore/{user_id}', 'AdminController@restore');
Route::get('/admin/question/insert', 'AdminController@questioninsert');

Route::post('admin/question/insert', 'AdminController@questionadd');

Route::get('admin/questionshow/{id}', 'AdminController@showquestion');


Route::get('admin/coursecategory', 'AdminController@coursecategoryadd');
Route::post('admin/coursecategory/insert', 'AdminController@coursecategoryinsert');


Route::get('admin/coursecategory/view', 'AdminController@coursecategoryview');

Route::get('admin/question/statusinactive/{question_id}', 'AdminController@coursecategorystatusinactive');
Route::get('admin/question/statusactive/{question_id}', 'AdminController@coursecategorystatusactive');

Route::get('admin/answershit/view/{id}', 'AdminController@answershitview');


//User Panel
//Personal info

Route::get('/candidate 1/userprofile', 'UserController@userprofile');
Route::post('user/profile/insert', 'UserController@userprofileadd');
Route::get('candidate 1/showdata', 'UserController@userdatashow');

Route::get('candidate 1/profiledetail', 'UserController@profiledetail');
Route::get('candidate 1/profiledetail/{user_id}','UserController@profiledetailshow');

Route::get('candidate 1/profileupdate/{user_id}','UserController@profileupdate');
Route::post('/update/user/insert/{user_id}','UserController@userprofileupdate');

Route::get('/candidate 1/givenexam', 'UserController@givenexam');

Route::get('/student/examstart/add/{id}', 'UserController@givenexamstart');

//Route::get('candidate 1/examfinishedd', 'UserController@examstart');

Route::post('student/examstartfinished/add', 'UserController@givenexamfinished');



