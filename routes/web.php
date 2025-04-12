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