<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'queries'],);

Route::get('/insert', [UserController::class, 'insertData'],);
Route::get('/update', [UserController::class, 'updateData'],);
Route::get('/delete', [UserController::class, 'deleteData'],);
