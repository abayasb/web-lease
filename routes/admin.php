<?php

    use Illuminate\Support\Facades\Route;

    Route::prefix('/admin')->group(function(){
        Route::get('/','App\http\Controllers\Admin\DashboardController@getDashboard');
        Route::get('/departament','App\http\Controllers\Admin\DepartamentController@getDepartament');
        Route::get('/departament/add-departament','App\http\Controllers\Admin\DepartamentController@getDepartamentAdd');
        Route::get('/gallery','App\http\Controllers\Admin\GalleryController@getGallery');
        Route::get('/gallery/departament-gallery-add',
        'App\http\Controllers\Admin\GalleryController@getGalleryAdd');
    });

    