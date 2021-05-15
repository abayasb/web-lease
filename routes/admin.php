<?php

    use Illuminate\Support\Facades\Route;

    Route::prefix('/admin')->group(function(){
        Route::get('/','App\http\Controllers\Admin\DashboardController@getDashboard');
        Route::get('/departament','App\http\Controllers\Admin\DepartamentController@getDepartament');
        Route::get('/departament/add-departament','App\http\Controllers\Admin\DepartamentController@getDepartamentAdd');
        Route::get('/gallery','App\http\Controllers\Admin\GalleryController@getGallery');
        Route::get('/gallery/departament-gallery-add',
        'App\http\Controllers\Admin\GalleryController@getGalleryAdd');

        Route::post('/departament/add-departament/ciudad','App\http\Controllers\Admin\DepartamentController@ciudades');
        Route::post('/departament/add-departament/universidad','App\http\Controllers\Admin\DepartamentController@universidades');
    
        Route::get('/information-personal','App\http\Controllers\Admin\InformationController@getInfotmacion');
        Route::get('/departament/_ciudad/{id}','App\http\Controllers\Admin\DepartamentController@ciudades');
        Route::get('/departament/_universidad/{id}','App\http\Controllers\Admin\DepartamentController@universidades');

    });

    