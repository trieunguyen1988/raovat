<?php

Route::group(['module'=>'Admin'], function(){
    
    Route::get('/admin/', function(){
        return view('backend.index');
    });
	
	Route::get('/admin/login', function(){
        return view('backend.login');
    });
    
});