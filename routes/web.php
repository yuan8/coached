<?php

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
	use App\PostArticle;
	Route::get('/vtweb', 'MYCT@vtweb');
	Route::get('/test-post', function(){
		dd(PostArticle::where('status',1)->update(['status'=>2]));
	});


	Route::get('/vtdirect', 'MYCT@vtdirect');
	Route::post('/vtdirect', 'MYCT@checkout_process');

	Route::get('/vt_transaction', 'MYCT@transaction');
	Route::post('/vt_transaction', 'MYCT@transaction_process');

	Route::post('/vt_notif', 'MYCT@notification');

	Route::get('/snap', 'MYCT@snap');
	Route::get('/snaptoken', 'MYCT@token');
	Route::post('/snapfinish', 'MYCT@finish');

	Route::get('shared/external/post/{id}/{slug?}',['uses'=>'WebControllController@public_post','as'=>'p_share_post']);

	Route::get('/n',function(){
		$tt=fcm()
    ->to(['eGwOcHS7b8U:APA91bHXyPXQQhwIJTCPXC9Bujdouk5i9a2HKNe126j4jOK2g4zjAYOhc2gGyMlnVaYVtKWMVPy0xyda9Il-vOlVtyqg3yZRJFDH1wbtIwPd6ct0js8au-JNri0lwy-TO3ZKJfUuJ6Xk']) // $recipients must an array
    ->data([
        'title' => 'Test FCM',
        'body' => 'This is a test of FCM',
    ])->notification([
        'title' => 'coached',
        'body' => 'This is a test of FCM',
    ])
    ->send();
		dd($tt);
	});


	Route::get('/midtrans-test','WebControllController@test');




	Route::get('/ss',function(){
		$timestamp = '2014-02-06 16:34:00';
		$de = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestamp, 'Europe/Stockholm');
		$date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestamp, 'Europe/Stockholm');
		$tt=[];
		$tt[]=$de;
		$tt[]=$date->setTimezone('Asia/Jakarta');
		dd($tt);
	});


	Route::get('/check-role',function(){
		if(Auth::user()){
			return Auth::user()->role;
		}else{
			return 'no auth';
		}
	});

	Route::get('/check-policy',function(){
		if(Auth::user()){
		if(Auth::user()->can('be.student')){
			return 'student';
		}elseif(Auth::user()->can('be.coached')){
			return 'coached';
		}else{
			return 'policy no able';
		}
		}else{
			return 'no login';
		}
	});

Route::group(['prefix' => 'p/filemanager', 'middleware' => ['web', 'auth']], function () {
     	\UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/',['uses'=>'WebControllController@index','as'=>'p.index']);

Route::get('logout',['uses'=>'Auth\CustomeAuthController@logOut','as'=>'p.access.logout']);

Route::prefix('p')->group(function(){
	Route::get('/category/{id}/{slug?}',['uses'=>'WebControllController@index','as'=>'p.category.index']);
	Route::get('/login',['uses'=>'Auth\CustomeAuthController@getLogin','as'=>'login']);

	Route::get('/register',['uses'=>'Auth\CustomeAuthController@getRegister','as'=>'register']);
	Route::post('/register',['uses'=>'Auth\CustomeAuthController@storeRegister','as'=>'register.store']);


	Route::get('/register/success/{id}',['uses'=>'Auth\CustomeAuthController@getRegisterSuccess','as'=>'register.success']);

	Route::get('/register/coached',['uses'=>'Auth\CustomeAuthController@getRegisterCoached','as'=>'register.coached']);
	Route::post('/register/coached',['uses'=>'Auth\CustomeAuthController@storeRegisterCoached','as'=>'register.coached.store']);


	Route::post('/login',['uses'=>'Auth\CustomeAuthController@login','as'=>'login.get_access']);
	// Route::post('/login/coached',['uses'=>'Auth\CustomeAuthController@loginCoached','as'=>'login.get_access.coached']);

	Route::get('/asset_db_student/js/auto_build_dinamical_app.js',['uses'=>'WebControllController@getDinamicTokenACCESS','as'=>'api_access_init']);


	
});

Route::prefix('a/dashboard')->group(function(){
	Route::post('settings/profile',['uses'=>'WebControllController@GDBupdateMyProfile','as'=>'a.update_my_profile']);
	Route::post('settings/languages',['uses'=>'WebControllController@DGBupdate_my_languages','as'=>'a.update_my_language']);
	Route::get('/category/{id}/{slug?}',['uses'=>'WebControllController@GDBcategory','as'=>'a.db.category']);
	Route::get('/post/{id}/{slug?}',['uses'=>'WebControllController@GDBpost','as'=>'a.db.post']);

});


Route::prefix('a/test')->group(function(){
	Route::get('satu',['uses'=>'TestC@no_satu','as'=>'satu']);
	Route::get('dua',['uses'=>'TestC@no_dua','as'=>'dua']);
	Route::get('enam',['uses'=>'TestC@no_enam','as'=>'enam']);
	Route::get('tiga',function(){
		$d=new App\Http\Controllers\TestC;
		return $d::IfoundaBall();
	});


});



require_once app_path() . '/../routes/web_student.php';
require_once app_path() . '/../routes/web_coach.php';
require_once app_path() . '/../routes/web_manager.php';






Route::get('/test',function(Illuminate\Http\Request $request){
	if(isset($request->q)){


	if($request->q!=''){

		$file = $request->q;
		$file_headers = @get_headers($file);
		if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
		    $exists = false;
		}
		else {
		    $tags=(get_meta_tags($request->q));
			dd($tags);
			$title=isset($tags['twitter:title'])?$tags['twitter:title']:'';
			$image= isset($tags['twitter:image'])?$tags['twitter:image']:'';
			$description=isset($tags['twitter:description'])?$tags['twitter:description']:'';


			$data=array('title'=>$title,'image'=>$image,'description'=>$description);
			dd($data);

			
		}
	
	}else{
				return 'null';
			}
	}
    // $crawler = Goutte::request('GET', 'https://www.bukalapak.com/p/food/bahan-mentah/qrhumx-jual-corned-beef-pronas-198-gr?campaign=penuhi-kebutuhan-sehari-hari-di-sini&from=current-day-promo-2&g=1&product_owner=seller_brand');
    // $crawler->filter('meta')->each(function ($node) {
    //   $h=($node->text());

    // });
    // dd($crawler);
   
    // return view('welcome');

});

Route::get('/test2','WebControllController@jj');

Route::get('/test3',function(){
	if(Auth::user()->can('ac_dashboard')){
		return 'ssss';
	}	

	// $f->FeaturedImage();

})->middleware(['auth:web','can:ac_dashboard']);

// 
// Auth::routes();



// Route::get('/home', 'HomeController@index')->name('home');
