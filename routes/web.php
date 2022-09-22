<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;

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



Route::get('/',[WebsiteController::class,'index']);
Route::get('/login',[AuthController::class,'create']);
Route::get('/logout',[AuthController::class,'logout']);
Route::post('/storelogin',[AuthController::class,'storelogin']);
// Route::post('/store',[AuthController::class,'store']);


Route::group(['prefix'=>'vision'],function(){
    Route::get('contact',[WebsiteController::class,'contact']);
    Route::get('cars',[WebsiteController::class,'cars']);
    Route::get('about',[WebsiteController::class,'about']);
    Route::get('faqs',[WebsiteController::class,'faqs']);
    Route::get('car_by_category/{id}',[WebsiteController::class,'car_by_category']);
    Route::get('car_by_brand/{id}',[WebsiteController::class,'car_by_brand']);
    Route::get('cardetail/{id}',[WebsiteController::class,'cardetail']);
});


Route::group(['prefix'=>'admin'],function(){


    Route::get('/',[adminController::class,'index']);


    Route::group(['prefix'=>'category'],function(){
        Route::get('create',[CategoryController::class,'create']);
        Route::post('store',[CategoryController::class,'store']);
        Route::get('show',[CategoryController::class,'show']);
        Route::get('destroy/{id}',[CategoryController::class,'destroy']);
    });

    
    Route::group(['prefix'=>'brand'],function(){
        Route::get('create',[BrandController::class,'create']);
        Route::post('store',[BrandController::class,'store']);
        Route::get('show',[BrandController::class,'show']);
        Route::get('destroy/{id}',[BrandController::class,'destroy']);
        Route::get('edit/{id}',[BrandController::class,'edit']);
        Route::post('update/{id}',[BrandController::class,'update']);
    });


    Route::group(['prefix'=>'car'],function(){
        Route::get('create',[CarController::class,'create']);
        Route::post('store',[CarController::class,'store']);
        Route::get('show',[CarController::class,'show']);
        Route::get('destroy/{id}',[CarController::class,'destroy']);
        Route::get('edit/{id}',[CarController::class,'edit']);
        Route::post('update/{id}',[CarController::class,'update']);
    });

});