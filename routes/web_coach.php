<?php




Route::prefix('c/dashboard')->middleware(['auth:web','can:be.coached'])->group(function(){
	Route::get('/settings/profile',['uses'=>'WebControllController@get_db_c_set_profile','as'=>'db.c.set.profile']);
	Route::get('/settings/password',['uses'=>'WebControllController@get_db_s_change_password','as'=>'db.c.change.password']);

});


Route::prefix('c/dashboard')->middleware(['auth:web','can:ac.dashboard','can:be.coached'])->group(function(){
	Route::get('/',['uses'=>'WebControllController@get_db_c_index','as'=>'db.c.index']);
	Route::get('/post-article',['uses'=>'WebControllController@get_db_c_post_article','as'=>'db.c.post_article']);

	Route::get('/post-article/show/{id}',['uses'=>'WebControllController@get_db_c_post_article_show','as'=>'db.c.post_article.detail']);

	Route::post('/post-article',['uses'=>'WebControllController@db_c_post_article_store','as'=>'db.c.post_article.store']);
	Route::get('/post-article/create',['uses'=>'WebControllController@get_db_c_post_article_create','as'=>'db.c.post_article.create']);


	Route::get('/post-video',['uses'=>'WebControllController@get_db_c_post_video','as'=>'db.c.post_video']);
	Route::get('/post-video/create',['uses'=>'WebControllController@get_db_c_post_video_create','as'=>'db.c.post_video.create']);

	Route::get('/price',['uses'=>'WebControllController@get_db_c_price','as'=>'db.c.price']);
	Route::post('/price',['uses'=>'WebControllController@get_db_c_price_store','as'=>'db.c.price.store']);
	Route::put('/price/{id}',['uses'=>'WebControllController@get_db_c_price_update','as'=>'db.c.price.update']);


	Route::get('/schedule',['uses'=>'WebControllController@get_db_c_schedule','as'=>'db.c.schedule']);
	Route::post('/schedule-setting/availabilities',['uses'=>'WebControllController@get_db_c_schedule_available_store','as'=>'db.c.schedule.availabel.store']);



});
