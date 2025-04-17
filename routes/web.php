<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

//auth routes
route::get('/login', [AuthController::class, 'login']);
route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
route::get('/logout', [AuthController::class, 'logout']);
