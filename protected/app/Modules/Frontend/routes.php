<?php

Route::group(['module'=>'Frontend'], function(){
    
    Route::get('/', function(){
        return view('frontend.index');
    });
    
});