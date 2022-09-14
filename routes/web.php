<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\adminController;

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
    Route::get('contact',[adminController::class,'contact']);
    Route::get('cars',[adminController::class,'cars']);
    Route::get('about',[adminController::class,'about']);
    Route::get('faqs',[adminController::class,'faqs']);
    Route::get('cardetail',[adminController::class,'cardetail']);
});