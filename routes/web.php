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


Route::get('/',[App\Http\Controllers\VideoController::class,'index']);
Route::get('video-list-show',[App\Http\Controllers\VideoController::class,'show']);
Route::get('create-video',[App\Http\Controllers\VideoController::class,'create']);
Route::post('store-video',[App\Http\Controllers\VideoController::class,'store']);

