<?php

Route::group(['module'=>'Admin'], function(){
    
    Route::get('/admin/welcome', function(){
        echo "Welcome Quiz Admin";
    });
    
});