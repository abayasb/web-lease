<?php

    use Illuminate\Support\Facades\Route;

    Route::prefix('/admin')->group(function(){
        Route::get('/','App\http\Controllers\Admin\DashboardController@getDashboard');
    });

    