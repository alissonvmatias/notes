<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    print('Hello World');
});

Route::get('/about', function ( ){
    print ('About US');
});

Route::get('/master/{value}', [MasterController::class, 'index']);
Route::get('/page2/{value}', [MasterController::class, 'page2']);
Route::get('/page3/{value}', [MasterController::class, 'page3']);