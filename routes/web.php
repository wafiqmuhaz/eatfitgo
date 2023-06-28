<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
//laravelproject\routes\web.php
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::post('users/store', [UserController::class, 'store'])->name('users.store');
Route::get('users/edit/{id}/', [UserController::class, 'edit']);
Route::post('users/update', [UserController::class, 'update'])->name('users.update');
Route::get('users/destroy/{id}/', [UserController::class, 'destroy']);