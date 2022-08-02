<?php

use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\CategoryAdminController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\PostsController;
use App\Http\Controllers\Api\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    return 2;
    
});


Route::get('/settings', [SettingController::class, 'index'])->middleware('auth:sanctum');
Route::get('/nav-categories', [CategoriesController::class, 'navbarCategories']);
Route::get('/index-page-categories', [CategoriesController::class, 'indexPageCategoriesWithPost']);

Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/{id}', [CategoriesController::class, 'show']);



Route::apiResource('posts' , PostsController::class)->except(['update','store','destroy']);


Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');


Route::apiResource('categoryadmin' , CategoryAdminController::class)->except('index','show')->middleware('auth:sanctum');
