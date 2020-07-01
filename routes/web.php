<?php

use Illuminate\Support\Facades\Route;



Auth::routes([
    'register' => false
]);


Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', 'Backend\HomeController@index')->name('backend.home');




});



