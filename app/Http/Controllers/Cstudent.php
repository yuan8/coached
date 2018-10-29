<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
include (__DIR__. '/Env.php');
use Auth;
use App\User;

class Cstudent extends Controller
{
	



	public function get_db_s_set_profile(){

        return view('profile_setting');
    }

    public function get_db_s_change_password(){
    	return view('profile_change_password');
    }


    public function get_db_s_index(){
    	return view('student.index');
    }


    public function get_db_s_all_coached(){
        $coaches=User::where('role',2)->where('active_status',1)->paginate(15);

        return view('student.all_coached')->with('coaches',$coaches);
    }



}