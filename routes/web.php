<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PublicController::class,'home'])->name('home');


Route::get('/trainee/subscribe',[CourseController::class,'subscribe'])->name('trainee.subscribe')->middleware('auth');
Route::post('/trainee/signup',[CourseController::class,'signup'])->name('trainee.signup');
Route::get('/trainee/list',[CourseController::class,'list'])->name('trainee.list');

