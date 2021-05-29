<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;


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

Route::get('/',[HomeController::class,'home']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('about',[HomeController::class,'about']);

Route::get('admin', function () {
    return view('admin.index');
});
Route::get('category',[CategoryController::class,'list']);
Route::get('category/create',[CategoryController::class,'displayCreateForm']);
Route::post('category/create',[CategoryController::class,'doCreate']);
Route::get('category/{id}',[CategoryController::class,'displayUpdateForm']);
Route::put('category/{id}',[CategoryController::class,'doUpdate']);
Route::delete('category/{id}',[CategoryController::class,'doDelete']);

Route::resource('booking',BookingController::class);
/*Route::resource('services',ServicesController::class);*/


Route::get('services',[ServicesController::class,'index']);
Route::get('services/create',[ServicesController::class,'create']);
Route::post('services/create',[ServicesController::class,'store']);
Route::get('update-services/{id}',[ServicesController::class,'displayUpdateForm']);
Route::post('update-services/{id}',[ServicesController::class,'doUpdate']);
Route::get('services/{id}',[ServicesController::class,'getXoa']);
// tin tuc
