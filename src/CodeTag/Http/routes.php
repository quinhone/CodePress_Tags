<?php


Route::group(['prefix' => 'tags'], function(){
	Route::get('test', function(){
		return 'Teste Tags';
	});
});