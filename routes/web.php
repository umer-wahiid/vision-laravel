<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewController;

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
Route::post('/store',[AuthController::class,'store']);

Route::get('contact',[WebsiteController::class,'contact']);
Route::get('cars',[WebsiteController::class,'cars']);
Route::get('about',[WebsiteController::class,'about']);
Route::get('faqs',[WebsiteController::class,'faqs']); 
Route::get('car_by_category/{id}',[WebsiteController::class,'car_by_category']);
Route::get('car_by_brand/{id}',[WebsiteController::class,'car_by_brand']);
Route::get('cardetail/{id}',[WebsiteController::class,'cardetail']);


Route::group(['prefix'=>'admin'],function(){
    
    
    Route::get('/',[adminController::class,'index']);
    
    Route::group(['prefix'=>'users'],function(){
        Route::get('create',[AuthController::class,'signup']);
        Route::post('store',[AuthController::class,'store']);
        Route::get('show',[AuthController::class,'show']);
        Route::get('reply/{id}',[AuthController::class,'reply']);
        Route::post('replymail/{id}',[AuthController::class,'replymail']);
        Route::get('destroy/{id}',[AuthController::class,'destroy']);
    });
    
    Route::group(['prefix'=>'contact'],function(){
        Route::post('store',[ContactController::class,'store']);
        Route::get('show',[ContactController::class,'show']);
        Route::get('reply/{id}',[ContactController::class,'reply']);
        Route::post('replymail/{id}',[ContactController::class,'replymail']);
        Route::get('destroy/{id}',[ContactController::class,'destroy']);
    });
    
    
    Route::group(['prefix'=>'faq'],function(){
        Route::get('create',[FaqController::class,'create']);
        Route::post('store',[FaqController::class,'store']);
        Route::get('show',[FaqController::class,'show']);
        Route::get('edit/{id}',[FaqController::class,'edit']);
        Route::post('update/{id}',[FaqController::class,'update']);
        Route::get('destroy/{id}',[FaqController::class,'destroy']);
    });
    
    
    Route::group(['prefix'=>'review'],function(){
        Route::get('create',[ReviewController::class,'create']);
        Route::post('store',[ReviewController::class,'store']);
        Route::get('show',[ReviewController::class,'show']);
        Route::get('edit/{id}',[ReviewController::class,'edit']);
        Route::post('update/{id}',[ReviewController::class,'update']);
        Route::get('destroy/{id}',[ReviewController::class,'destroy']);
    });


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
        Route::get('editimage/{id}',[CarController::class,'editimage']);
        Route::post('update/{id}',[CarController::class,'update']);
        Route::post('updateimage/{id}',[CarController::class,'updateimage']);
    });

});