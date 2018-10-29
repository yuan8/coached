<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use Auth;
use App\User;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    //


    public function getStateByCountryId($id){
    		$requestq=array('id'=>$id);
    	 $validator = Validator::make($requestq, [
            'id' => 'required|numeric|exists:countries',
        ]);
        if ($validator->fails()) {
            return 	array(
	            	'code'=>500,
	            	'data'=>[],
	            	'errors'=>$validator->messages(),
	            	'inputs'=>$requestq,
        		);
							
        }

        return 	array(
	            	'code'=>200,
	            	'data'=> DB::table('states')->where('country_id',$id)->get(),
	            	'errors'=>$validator->messages(),
	            	'inputs'=>$requestq,
        		);


    }

     public function DGBupdate_my_ava(Request $request){

        $validator = Validator::make($request->all(), [
            'ava' => 'required|file',
            
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }



        $path = $request->file('ava')->store(
            'public/avatars/'.$request->user()->id
        );


      if($path){
          $path=Storage::url($path);
          Auth::user()->avatar=$path;
          Auth::user()->save();
          return array(
            'code'=>200
          );
      }







    }
}
