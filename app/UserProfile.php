<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Iatstuti\Database\Support\NullableFields;
class UserProfile extends Model
{

	use NullableFields;

    protected $fillable=['name','father','mother','gender','mobile','birth','nid','address1','address2','image','s_roll','s_group','s_year','s_board','s_gpa','h_roll','h_group','h_year','h_board','h_gpa1','g_university','g_department','g_year','g_duration','g_cgpa','skill','m_university','m_department','m_year','m_duration','m_cgpa1','postname','lengthofservice','organization','describe'];


}
