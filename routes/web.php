<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;


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

route::get('/',[UserController::class,'index']);
route::get('/pune_projects',[UserController::class,'pune_projects']);

Route::post('/login',[LoginController::class,'login_check']);
Route::get('/dashboard',[AdminController::class,'dashboard']);

Route::get('/addtemple',[AdminController::class,'addtemple']);
Route::post('/addtemple',[AdminController::class,'savetemple']);

Route::get('/AddTempleImage',[AdminController::class,'viewTempleImage']);
Route::post('/AddTempleImage',[AdminController::class,'SaveTempleImage']);

// view
route::get('/alltemple',[AdminController::class,'alltemple']);
route::get('/ViewTemple/{slug}',[AdminController::class,'view']);
route::get('/activate/{slug}',[AdminController::class,'active']);
route::get('/EditTemple/{slug}',[AdminController::class,'edit']);
route::post('/EditTemple/{slug}',[AdminController::class,'update']);
route::get('/TempleInfoUpdate/{slug}',[AdminController::class,'infoUpdate']);
route::post('/TempleInfoUpdate/{slug}',[AdminController::class,'infoUpdateSave']);

route::get('/DeleteTemple/{slug}',[AdminController::class,'delete']);



Route::get('/logout',[AdminController::class,'logout']);