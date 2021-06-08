<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsTypeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Models\Category;
use App\Models\NewsType;
use App\Http\Resources\NewsTypeResource;
use Illuminate\Http\Request;

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
})->name('welcome');

Route::prefix('admin')->group(function(){

    Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
    
    /**
     * Route for The Loai
     */
    // Index URI: category
    
    Route::resource('category', CategoryController::class);

    /**
     * Route for NewsType
     * 
     */
    Route::resource('newstype', NewsTypeController::class);

    /**
     * Route for NewsType
     * 
     */
    Route::resource('news', NewsController::class);

    /**
     * Route for Advertisement
     * 
     */
    Route::resource('advertisement', AdvertisementController::class);

    /**
     * Route for User
     * 
     */
    Route::resource('user', UserController::class);

    
    
});
/**
     * Route for NormalUser
     * 
*/
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route test
Route::get('/Test', function () {
    return view('normalUser/index');
});

//Login
Auth::routes();

//Imagecontroller
Route::get('image/index', [ImageController::class, 'index']);
Route::post('image/upload', [ImageController::class,'upload']);
