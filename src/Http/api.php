<?php

use Illuminate\Support\Facades\Route;
use Naranjhub\Cms\Http\Controller\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/admin',[AdminController::class,'index']);
Route::get('admin/config',function (){
    return config('cms.name');
});
Route::get('admin/config1/',[\Naranjhub\Cms\Http\Controller\UserController::class,'index'])->middleware('admin');
