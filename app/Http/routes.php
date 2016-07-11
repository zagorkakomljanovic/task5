<?php



Route::get('/', 'PageController@index');


Route::group(['prefix' => 'api/v1'], function(){
	Route::resource('jokes', 'User1Controller');
});

