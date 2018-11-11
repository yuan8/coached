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
use Illuminate\Support\Facades\Storage;
use App\CoachDetail;
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

		$posts=$posts->orderBy('id','DESC')->where('type',0)->paginate(10);
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

		$posts=$posts->where('type',1)->orderBy('id','DESC')->paginate(10);
		return view('coach.post_video')->with('posts',$posts);
	}

	public function get_db_c_post_video_create(){
		Session::flash('menu','post');
		Session::flash('sub_menu','video');
		return view('coach.post_video_create');
	}

	public function db_c_post_video_store(Request $request){
			 $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id'=>'required|numeric|exists:post_categories,id',
            'featured_images'=>'required|file|mimes:jpeg,jpg,png',
            'featured_video'=>'required|url|string'
        ]);


        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $image=$request->file('featured_images');
        $image_name=$image->getClientOriginalName();
        if($image_name){
        	$path = $image->storeAs(
		    	'public/post_cover',$request->user()->id.'/'.$image_name
			);
	
        }

		$path=Storage::url($path);

        $post=PostArticle::create([
        	'title'=>$request->title,
        	'content'=>$request->content,
        	'user_id'=>Auth::user()->id,
        	'category_id'=>$request->category_id,
        	'status'=>1,
        	'type'=>1,
        	'featured_images'=>$path,
        	'featured_video'=>$request->featured_video
        ]);
        
        return redirect()->route('db.c.post_video');
		 
	}



	public function get_db_c_set_profile(){
		return view('profile_setting');
	}

	public function db_c_post_article_update(PostArticle $id,Request $request){

		$validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id'=>'required|numeric|exists:post_categories,id',
            'featured_images'=>'nullable|file|mimes:jpeg,jpg,png'
        ]);


        if ($validator->fails()) {

            return back()
                        ->withErrors($validator)
                        ->withInput();
        }


        if(isset($id->id)){
        	if($request->hasFile('featured_images')){
        		$path=$id->featured_images;
        		 $image=$request->file('featured_images');
        		  if($image){
		        	 $image_name=$image->getClientOriginalName();
			        if($image_name){
			        	$path = $image->storeAs(
					    	'public/post_cover',$request->user()->id.'/'.$image_name
						);
						$path=Storage::url($path);
						$id->featured_images=$path;


			        }
	       	 }

        }

        $post_article=$id;
        $post_article->title=$request->title;
        $post_article->content=$request->content;
        $post_article->category_id=$request->category_id;
        $post_article->save();

        	
	    return back();



        }




	}

	public function get_db_c_post_article_delete(Post $id){



	}


	public function db_c_post_article_store (Request $request){

		$featured_image_names='xss';
		$featured_images=[];
			// $error=['featured_images'=>['Error Compail']];
			// if(isset($featured_image_names)AND(isset($request->featured_images))){
			// 	if((count($featured_image_names)>0)AND(count($request->featured_images)>0)){
			// 		foreach ($request->featured_images as $key => $value) {
			// 			$data=array('name'=>("n-".$key),'url'=>$value);
			// 			$validator = Validator::make($data, [
			// 	            'name' => 'required|string|max:255',
			// 	            'url' => 'required|string'
			// 	        ]);

			// 	        if ($validator->fails()) {
			// 	            return back()
		 //                        ->withErrors(['featured_images'=>array('The futured image required')])
		 //                        ->withInput();
			// 	        }

			// 			$featured_images[]=$data;
			// 		}

			// 		$featured_images=((string) json_encode($featured_images));	
			// 	}else{
		 //    		  return back()
   //                      ->withErrors(['featured_images'=>array('The futured image required')])
   //                      ->withInput();
			// 	}
			// }else{
		 //    	 return back()
   //                      ->withErrors(['featured_images'=>array('The futured image required')])
   //                      ->withInput();
			// }
		    
		    // Code following an exception is not executed.
		

		 $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id'=>'required|numeric|exists:post_categories,id',
            'featured_images'=>'required|file|mimes:jpeg,jpg,png'
        ]);



        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $image=$request->file('featured_images');
        $image_name=$image->getClientOriginalName();
        if($image_name){
        	$path = $image->storeAs(
		    	'public/post_cover',$request->user()->id.'/'.$image_name
			);
	
        }

		$path=Storage::url($path);

        $post=PostArticle::create([
        	'title'=>$request->title,
        	'content'=>$request->content,
        	'user_id'=>Auth::user()->id,
        	'category_id'=>$request->category_id,
        	'status'=>1,
        	'featured_images'=>$path
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


	public function get_db_s_change_init(Request $request){

			$validator = Validator::make($request->all(),[
			'description'=>'required|string|nullable',
            'opener_video' => 'nullable|string|url|nullable',
        ]);

		if ($validator->fails()) {
			
			return back()
			            ->withErrors($validator)
			            ->withInput();
		}

		$coach_detail=CoachDetail::where('coach_id',Auth::user()->id)->first();

		if($coach_detail){
			$coach_detail->description=$request->description;
			$coach_detail->opener_video=$request->opener_video;
			$coach_detail->save();

		}else{
			CoachDetail::create([
				'description'=>$request->description,
				'opener_video'=>$request->opener_video,
				'coach_id'=>Auth::user()->id
			]);
		}

		return back();





		
	}


}