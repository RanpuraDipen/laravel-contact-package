<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Dipen\Contact\Http\Controllers','middleware'=>'web'],function(){
    Route::get('contact','ContactController@index');
    Route::post('contact','ContactController@send');
});

