<?php

Route::group(['module'=>'Admin', 'namespace' => 'App\Modules\Backend\Controllers', 'prefix' => 'admin'], function(){
    
    Route::get('/', function(){
        return view('backend.index');
    });
	
	
    Route::get('login',
        ['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin']
    );
    Route::post('login', 
    	['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']
    );
});