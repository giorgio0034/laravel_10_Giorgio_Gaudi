<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


//PublicController
Route::get('/',[PublicController::class,'home'])->name('home');

//Course Controller
Route::get('/trainee/subscribe',[CourseController::class,'subscribe'])->name('trainee.subscribe')->middleware('auth');
Route::post('/trainee/signup',[CourseController::class,'signup'])->name('trainee.signup')->middleware('auth');
Route::get('/trainee/list',[CourseController::class,'list'])->name('trainee.list');

//Article Controller

Route::get('/article/create',[ArticleController::class,'create'])->name('article.create')->middleware('auth');
Route::post('/article/store',[ArticleController::class,'store'])->name('article.store')->middleware('auth');

Route::get('/article/index',[ArticleController::class,'index'])->name('article.index')->middleware('auth');
Route::get('/article/show/{article}',[ArticleController::class,'show'])->name('article.show');
