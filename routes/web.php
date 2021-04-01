<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
Route::prefix('Admin')->group(function(){
    Route::get('user/{id}', function ($id){
        return 'user'.$id;
    });
    /**
     * Route for The Loai
     */
    // Index URI: category
    // Route::get('category', 'CategoryController@index')->name('category.index');

    Route::resource('category', 'App\Http\Controllers\CategoryController');

    /**
     * Route for NewsType
     * 
     */
    Route::resource('newstype', 'App\Http\Controllers\NewsTypeController');
    
   
    


    
});
