<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloo',[IndexController::class,'sayhello']);

Route::get('/hiii',[IndexController::class,'sayhi']);


/*Route::get('/howww', function () {
    return view('how', ['message' => 'myname']);
});*/


Route::get('/howww',[IndexController::class,'sayhow']);

Route::get('/',[LoginController::class,'login']);

Route::post('/check',[LoginController::class,'checklogin']);

Route::get('/success',[LoginController::class,'successlogin']);

Route::get('/logout',[LoginController::class,'logout']);




