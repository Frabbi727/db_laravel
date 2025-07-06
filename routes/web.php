<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'queries']);
Route::get('/insert', [UserController::class, 'insertData']);
Route::get('/update', [UserController::class, 'updateData'],);
Route::get('/delete', [UserController::class, 'deleteData'],);

