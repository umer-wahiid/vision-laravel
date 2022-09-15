<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;

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


Route::group(['prefix'=>'vision'],function(){
    Route::get('contact',[WebsiteController::class,'contact']);
    Route::get('cars',[WebsiteController::class,'cars']);
    Route::get('about',[WebsiteController::class,'about']);
    Route::get('faqs',[WebsiteController::class,'faqs']);
    Route::get('cardetail',[WebsiteController::class,'cardetail']);
});




Route::group(['prefix'=>'admin'],function(){

    Route::get('/',[adminController::class,'index']);

    Route::group(['prefix'=>'category'],function(){
        Route::get('create',[CategoryController::class,'create']);
        Route::get('show',[CategoryController::class,'show']);
    });

    Route::group(['prefix'=>'brand'],function(){
        Route::get('create',[BrandController::class,'create']);
        Route::get('show',[BrandController::class,'show']);
    });

});