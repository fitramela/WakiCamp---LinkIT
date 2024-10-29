<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return view('about' ,["name" => "Hassan" , "age" => 23 , "title" => "about"] );
} );

Route::resource('/about', CostReportController::class);