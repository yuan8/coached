<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\CoachDetail;
class CustomeAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    // role 1 = student 2= coached 3=manager
    public function logOut(){
        if(Auth::user()){
            Auth::logout(Auth::user());
            // return redirect()->route('p.index');
        }
        return redirect()->route('p.index');
    }

    public function getLogin(){
        return view('login');
    }

    public function getRegister(){
        return view('register');
    }

    public function getRegisterCoached(){
        return view('register')->with('for_coach',true);
    }

    public function getRegisterSuccess($id){
        $user=User::find($id);
        if($user){
            return view('register_success')->with('user',$user);
        }else{
            return 'Server not Found';
        }

    }



    public function login(Request $request){

         $validator = Validator::make($request->all(), [
            'id' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $id=$request->id;
        $password=$request->password;

       if (Auth::attempt(['email' => $id, 'password' => $password, 'active_status' => 1])) {
                if(Auth::user()->can('be.manager')){
                    return redirect()->route('db.m.index');
                }else if(Auth::user()->can('be.student')){
                    return redirect()->route('db.s.index');
                }else if(Auth::user()->can('be.coached')){

                    if(!Auth::user()->R_coach_coach_detail){
                        CoachDetail::create(['coach_id'=>Auth::user()->id]);
                    }

                    return redirect()->route('db.c.index');
                }else{
                    return redirect()->route('p.index');
                }

                return redirect()->route('p.index');

        }elseif(Auth::attempt(['username' => $id, 'password' => $password, 'active_status' => 1])){
            return redirect()->route('p.index');
        }else{
            return back();
        }


    }

 

    public function storeRegister(Request $request){

         $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255|alpha',
            'last_name' => 'required|string|max:255|alpha',
            'username' => 'required|string|max:255|alpha_dash|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'timezone' => 'required|string|max:255|timezone',
            'sex' => 'required|numeric|max:1',
        ]);


        if ($validator->fails()) {

            return back()
                        ->withErrors($validator)
                        ->withInput();
        }



        if($request->sex==0){
            $ava='/asset_ava/man.png';
        }else{
            $ava='/asset_ava/woman.png';
        }


        $user=(new  User)::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'username'=>$request->username,
            'sex'=>$request->sex,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'avatar'=>$ava,
            'timezone'=>$request->timezone,
            'active_status'=>0,
            'api_token'=>Hash::make($request->email),
            'role'=>1,
        ]);

        Session::flash('message',array('code'=>1,'m'=>'success created user'));
        return redirect()->route('register.success',['id'=>$user->id]);


    }


    public function storeRegisterCoached(Request $request){

         $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255|alpha',
            'last_name' => 'required|string|max:255|alpha',
            'username' => 'required|string|max:255|alpha_dash|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'timezone' => 'required|string|max:255|timezone',
            'sex' => 'required|numeric|max:1',
        ]);


        if ($validator->fails()) {

            return back()
                        ->withErrors($validator)
                        ->withInput();
        }



        if($request->sex==0){
            $ava='/asset_ava/man.png';
        }else{
            $ava='/asset_ava/woman.png';
        }


        $user=(new  User)::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'username'=>$request->username,
            'sex'=>$request->sex,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'avatar'=>$ava,
            'timezone'=>$request->timezone,
            'active_status'=>0,
            'api_token'=>Hash::make($request->email),
            'role'=>2,
        ]);

        Session::flash('message',array('code'=>1,'m'=>'success created user'));
        return redirect()->route('register.success',['id'=>$user->id]);

    }
}
