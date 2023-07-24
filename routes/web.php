<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', function(){
 Return view('login');
});

Route::post('/login',[LoginController::class,'login_check']);
Route::get('/dashboard',[AdminController::class,'dashboard']);

Route::get('/addtemple',[AdminController::class,'addtemple']);
Route::post('/addtemple',[AdminController::class,'savetemple']);

Route::get('/AddTempleImage',[AdminController::class,'viewTempleImage']);
Route::post('/AddTempleImage',[AdminController::class,'SaveTempleImage']);

Route::get('/logout',[AdminController::class,'logout']);