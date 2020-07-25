<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false
]);

Route::get('/', 'Frontend\HomeController@index')->name('frontend.home');

Route::get('/productos', 'Frontend\ProductController@all')->name('frontend.products.all');
Route::get('/productos/ver/{slug}', 'Frontend\ProductController@show')->name('frontend.products.show');

Route::get('/nosotros', 'Frontend\HomeController@aboutUs')->name('frontend.about-us');

Route::get('/informacion-relevante', 'Frontend\InformationController@all')->name('frontend.information.all');
Route::get('/informacion-relevante/ver/{slug}', 'Frontend\InformationController@show')->name('frontend.information.show');

Route::get('/contacto', 'Frontend\HomeController@contactForm')->name('frontend.contact.form');
Route::post('/', 'Frontend\HomeController@contactSend')->name('frontend.contact.send');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', 'Backend\HomeController@index')->name('backend.home');

    Route::get('profile/view', 'Backend\HomeController@profileView')->name('profile.view');
    Route::post('profile/update/{user}', 'Backend\HomeController@profileUpdate')->name('profile.update');

    Route::get('users/datatable', 'Backend\UserController@datatable')->name('users.datatable');
    Route::resource('users', 'Backend\UserController');

    Route::get('sliders/datatable', 'Backend\SliderController@datatable')->name('sliders.datatable');
    Route::resource('sliders', 'Backend\SliderController');

    Route::get('product-types/datatable', 'Backend\ProductTypeController@datatable')->name('product-types.datatable');
    Route::resource('product-types', 'Backend\ProductTypeController');

    Route::get('information/datatable', 'Backend\InformationController@datatable')->name('information.datatable');
    Route::resource('information', 'Backend\InformationController');

    Route::get('products/datatable', 'Backend\ProductController@datatable')->name('products.datatable');
    Route::resource('products', 'Backend\ProductController');

    Route::get('galleries/datatable', 'Backend\GalleryController@datatable')->name('galleries.datatable');
    Route::resource('galleries', 'Backend\GalleryController');
    Route::get('galleries/delete-file/{id}', 'Backend\GalleryController@deleteFile')->name('galleries.delete-file');
});
