<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ADMIN
//index celebrity
Route::get('/celebrities/index', [App\Http\Controllers\Admin\CelebrityController::class,'index'])->name('celebrities:index')->middleware('auth');

//create celebrity
Route::get('/celebrities/create', [App\Http\Controllers\Admin\CelebrityController::class,'create'])->name('celebrities:create')->middleware('auth');

//store celebrity
Route::post('/celebrities/create', [App\Http\Controllers\Admin\CelebrityController::class,'store'])->name('celebrities:store')->middleware('auth');

//show celebrity
Route::get('/celebrities/show/{celebrity}',[App\Http\Controllers\Admin\CelebrityController::class,'show'])->name('celebrities:show')->middleware('auth');

//display celebrity
Route::get('/celebrities/display/{celebrity}',[App\Http\Controllers\Admin\CelebrityController::class,'display'])->name('celebrities:display');

//edit celebrity
Route::get('/celebrities/{celebrity}/edit',[App\Http\Controllers\Admin\CelebrityController::class,'edit'])->name('celebrities:edit')->middleware('auth');

//update celebrity
Route::post('celebrities/{celebrity}/edit', [App\Http\Controllers\Admin\CelebrityController::class,'update'])->name('celebrities:update')->middleware('auth');

//delete celebrity
Route::get('celebrities/{celebrity}/delete', [App\Http\Controllers\Admin\CelebrityController::class,'delete'])->name('celebrities:delete')->middleware('auth');

//edit admin profile
Route::get('/users/edit',[App\Http\Controllers\ProfileController::class,'edit'])->name('profile:edit')->middleware('auth');

//update admin profile
Route::post('/users/{user}/edit',[App\Http\Controllers\ProfileController::class,'update'])->name('profile:update')->middleware('auth');