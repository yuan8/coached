<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Cstudent as ControllerStudent;
use Illuminate\Support\Facades\Session;
use Validator;
use App\PostArticle;
use Auth;
use Exception;
use App\Price;
use Carbon\Carbon;
use App\CoachAvaible;
class Ccoach extends ControllerStudent
{


	public function get_db_c_index(){

		Session::flash('menu','index');
		return view('coach.index');
	}

	public function get_db_c_post_article(Request $request){
		Session::flash('menu','post');
		Session::flash('sub_menu','article');
		$posts=PostArticle::where('user_id',Auth::user()->id);

		if($request->q){
			$posts=$posts->where('title','like',$request->q);
		}
		if($request->status){
			$posts=$posts->where('status',$request->status);

		}
		if($request->category){
			$posts=$posts->where('category_id',$request->category);
		}

		$posts=$posts->orderBy('id','DESC')->paginate(2);
		return view('coach.post_acticle')->with('posts',$posts);
	}


	public function get_db_c_post_article_create(){
		Session::flash('menu','post');
		Session::flash('sub_menu','article');
		return view('coach.post_acticle_create');
	}

	public function get_db_c_post_article_show($id){
		Session::flash('menu','post');
		Session::flash('sub_menu','article');

		$post=PostArticle::find($id);
		if($post){
			if($post->user_id==Auth::user()->id){
				return view('coach.post_article_detail')->with('post',$post);
			}else{
				return abort('404');
			}

		}else{
			return abort('404');
		}

	}

	public function get_db_c_post_video(Request $request){
		Session::flash('menu','post');
		Session::flash('sub_menu','video');
		$posts=PostArticle::where('user_id',Auth::user()->id);

		if($request->q){
			$posts=$posts->where('title','like',$request->q);
		}
		if($request->status){
			$posts=$posts->where('status',$request->status);

		}
		if($request->category){
			$posts=$posts->where('category_id',$request->category);
		}

		$posts=$posts->orderBy('id','DESC')->paginate(2);
		return view('coach.post_video')->with('posts',$posts);
	}

	public function get_db_c_post_video_create(){
		Session::flash('menu','post');
		Session::flash('sub_menu','video');
		return view('coach.post_video_create');
	}



	public function get_db_c_set_profile(){
		return view('profile_setting');
	}

	public function db_c_post_article_store (Request $request){

		$featured_image_names='xss';
		$featured_images=[];
			$error=['featured_images'=>['Error Compail']];
			if(isset($featured_image_names)AND(isset($request->featured_images))){
				if((count($featured_image_names)>0)AND(count($request->featured_images)>0)){
					foreach ($request->featured_images as $key => $value) {
						$data=array('name'=>("n-".$key),'url'=>$value);
						$validator = Validator::make($data, [
				            'name' => 'required|string|max:255',
				            'url' => 'required|string'
				        ]);

				        if ($validator->fails()) {
				            return back()
		                        ->withErrors(['featured_images'=>array('The futured image required')])
		                        ->withInput();
				        }

						$featured_images[]=$data;
					}

					$featured_images=((string) json_encode($featured_images));	
				}else{
		    		  return back()
                        ->withErrors(['featured_images'=>array('The futured image required')])
                        ->withInput();
				}
			}else{
		    	 return back()
                        ->withErrors(['featured_images'=>array('The futured image required')])
                        ->withInput();
			}
		    
		    // Code following an exception is not executed.
		

		 $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id'=>'required|numeric|exists:post_categories,id'
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $post=PostArticle::create([
        	'title'=>$request->title,
        	'content'=>$request->content,
        	'user_id'=>Auth::user()->id,
        	'category_id'=>$request->category_id,
        	'status'=>1,
        	'featured_images'=>$featured_images

        ]);

        return redirect()->route('db.c.post_article');

	}



	public function get_db_c_price(){
		Session::flash('menu','price');
		Session::flash('sub_menu','');
		$prices=Price::where('coach_id',Auth::user()->id)->orderBy('id','desc')->paginate(10);
		return view('coach.price')->with('prices',$prices);
	}


	public function get_db_c_price_store(Request $request){

		$validator = Validator::make($request->all(), [
            'hours' => 'required|numeric|max:360|min:30|in:'. implode(',', array(30,60,90,120,150,180,210,240,270,300,330,360)),
            'price' => 'required|numeric|max:100000000|min:0',
            'description'=>'required|string'
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        Price::create([
        	'in_minutes'=>$request->hours,
        	'description'=>$request->description,
        	'price'=>$request->price,
        	'coach_id'=>Auth::user()->id
        ]);

        return back();

	}

	public function get_db_c_price_update(Price $id,Request $request){

		$validator = Validator::make($request->all(), [
            'hours' => 'required|numeric|max:360|min:30|in:'. implode(',', array(30,60,90,120,150,180,210,240,270,300,330,360)),
            'price' => 'required|numeric|max:100000000|min:0',
            'description'=>'required|string'
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        if(isset($id->id)){
        	if(Auth::user()->id==$id->coach_id){
        		$id->price=$request->price;
        		$id->description=$request->description;
        		$id->in_minutes=$request->hours;
        		$id->save();

        	}


        }

        
        return back();

	}

	public function get_db_c_schedule(){
		Session::flash('menu','schedule');
		Session::flash('sub_menu','');
		return view('coach.schedule');
	}


	public function get_db_c_schedule_available_store(Request $request){

		$data=array('start'=>'2018-10-28 '.$request->start,'end'=>'2018-10-28 '.$request->end,'day_code'=>$request->day_code??'');
		// dd(Carbon::parse($data['start']));

		$validator = Validator::make($data,[
			'day_code'=>'required|numeric|in:'. implode(',', array(0,1,2,3,4,5)),
            'start' => 'required|date',
            'end' => 'required|date|after:'.$data['start'],
        ]);

        if ($validator->fails()) {
        	dd($validator);
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        CoachAvaible::create([
        	'day_code'=>$request->day_code,
        	'start'=>$request->start,
        	'end'=>$request->end,
        	'coach_id'=>Auth::user()->id
        ]);
        
        
        return back();

	}


}