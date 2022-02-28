<?php

Route::group(['namespace' => 'emreg\Contact\Http\Controllers'] , function(){

    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact', 'ContactController@send');
});
