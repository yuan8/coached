<?php


Route::prefix('s/dashboard')->middleware(['auth:web','can:be.student'])->group(function(){
	Route::get('/settings/profile',['uses'=>'WebControllController@get_db_s_set_profile','as'=>'db.s.set.profile']);
	Route::get('/settings/password',['uses'=>'WebControllController@get_db_s_change_password','as'=>'db.s.change.password']);

});



// --------------------------------------------------------------------------------------------------------------------


Route::prefix('s/dashboard')->middleware(['auth:web','can:ac.dashboard','can:be.student'])->group(function(){
	Route::get('/',['uses'=>'WebControllController@get_db_s_index','as'=>'db.s.index']);
	Route::get('/all-coached',['uses'=>'WebControllController@get_db_s_all_coached','as'=>'db.s.all_coached']);

});
