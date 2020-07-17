<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false
]);

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', 'Backend\HomeController@index')->name('backend.home');

    Route::get('users/datatable', 'Backend\UserController@datatable')->name('users.datatable');
    Route::resource('users', 'Backend\UserController');

    Route::get('sliders/datatable', 'Backend\SliderController@datatable')->name('sliders.datatable');
    Route::resource('sliders', 'Backend\SliderController');

    Route::get('information/datatable', 'Backend\InformationController@datatable')->name('information.datatable');
    Route::resource('information', 'Backend\InformationController');
});
