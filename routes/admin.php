<?php

    use Illuminate\Support\Facades\Route;

    Route::prefix('/admin')->group(function(){
        Route::get('/','App\http\Controllers\Admin\DashboardController@getDashboard');

        //Departamento
        Route::get('/departament','App\http\Controllers\Admin\DepartamentController@getDepartament');
        Route::post('/departament/add-departament/ciudad','App\http\Controllers\Admin\DepartamentController@ciudades');
        Route::post('/departament/add-departament/universidad','App\http\Controllers\Admin\DepartamentController@universidades');
        Route::post('/departament/add-departament','App\http\Controllers\Admin\DepartamentController@postDepartament');


        //Ubicaciones provincia, ciudad, Universidad
        Route::get('/departament/add-departament','App\http\Controllers\Admin\DepartamentController@getDepartamentAdd');
        Route::get('/departament/_ciudad/{id}','App\http\Controllers\Admin\DepartamentController@ciudades');
        Route::get('/departament/_universidad/{id}','App\http\Controllers\Admin\DepartamentController@universidades');
        
        
        //GALERIA
        Route::get('/gallery','App\http\Controllers\Admin\GalleryController@getGallery');
        Route::get('/gallery/departament/{id}/edit', 'App\http\Controllers\Admin\GalleryController@getGalleryAdd');
        Route::post('/gallery/departament/{id}/gallery/add','App\http\Controllers\Admin\GalleryController@postDepartamentGallery');
        Route::get('/gallery/departament/{id}/gallery/{idGallery}/delete','App\http\Controllers\Admin\GalleryController@getDepartamentGalleryDelete');
        //Informacion personal
        Route::get('/information-personal','App\http\Controllers\Admin\InformationController@getInfotmacion');
        
    });

    