<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\npan_priority_indicatorController;
use App\Http\Controllers\routine_proxy_indicatorController;
use App\Http\Controllers\target_indicatorController;


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

Route::get('/', [HomeController::class,'home']);

Route::get('/npan_priority_indicator', [npan_priority_indicatorController::class,'npan_priority_indicator']);
Route::get('/routine_proxy_indicator', [routine_proxy_indicatorController::class,'routine_proxy_indicator']);
Route::get('/target_indicator', [target_indicatorController::class,'target_indicator']);