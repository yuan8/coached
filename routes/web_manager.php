<?php




Route::prefix('m/dashboard')->middleware(['auth:web','can:be.manager'])->group(function(){
	Route::get('/settings/profile',['uses'=>'WebControllController@get_db_s_set_profile','as'=>'db.m.set.profile']);
});


// --------------------------------------------------------------------------------------------------------------------


Route::prefix('m/dashboard')->middleware(['auth:web','can:ac.dashboard','can:be.manager'])->group(function(){
	Route::get('/',['uses'=>'Auth\CustomeAuthController@login','as'=>'db.m.index']);
});
