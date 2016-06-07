<?php

Route::group(['prefix'=>'admin', 'module'=>'Backend'], function() {

    Route::get('/', function() {
        return view('backend.index');
    });

    Route::get('/login', 'LoginController@index');
});
