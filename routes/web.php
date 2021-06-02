<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;

use App\Http\Controllers\NewsController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('about', [HomeController::class, 'about']);
Route::get('thank', [HomeController::class, 'thank']);
Route::get('news/{id}', [HomeController::class, 'list']);
Route::get('news_detail/{id}', [HomeController::class, 'newsDetail']);
Route::get('services/{id}', [HomeController::class, 'servicesList']);
Route::get('services_detail/{id}', [HomeController::class, 'servicesDetail']);



Route::get('admin', function () {
    return redirect()->route('booking.index');
});
//Route::group(['middleware' => 'auth'], function(){
//Route::group(['prefix'=>'admin'],function(){
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('category', [CategoryController::class, 'list']);
    Route::get('category/create', [CategoryController::class, 'displayCreateForm']);
    Route::post('category/create', [CategoryController::class, 'doCreate']);
    Route::get('category/{id}', [CategoryController::class, 'displayUpdateForm']);
    Route::put('category/{id}', [CategoryController::class, 'doUpdate']);
    Route::delete('category/{id}', [CategoryController::class, 'doDelete']);
    Route::resource("news", NewsController::class);
    Route::get('services', [ServicesController::class, 'index']);
    Route::get('services/create', [ServicesController::class, 'create']);
    Route::post('services/create', [ServicesController::class, 'store']);
    Route::get('update-services/{id}', [ServicesController::class, 'displayUpdateForm']);
    Route::post('update-services/{id}', [ServicesController::class, 'doUpdate']);
    Route::get('services/{id}', [ServicesController::class, 'getXoa']);
    Route::get('search',[ServicesController::class,'search']);
// tin tuc
    Route::get('/admin', [HomeController::class, 'index'])->name('home');
//});
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource("booking", BookingController::class);
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Auth::routes(['register' => false]);
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


