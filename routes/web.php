<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\NewsType;
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
Route::get('foo', function (){
    $a=1;
    $b=2;
    return $a.'+'.$b. '='.($a + $b);
});

Route::get('user/{age}', function ($age){
    return 'Tuoi: '.$age;
})->where('id', '[0-9]+')->middleware('checkage');

Route::get('user/{name}', function ($name){
    return 'Chuoi'.$name;
});

Route::get('post/{post}/comment/{comment}', function ($postID, $CommentID){
    return 'Post: '.$postID.'<br>'.' Comment: '.$CommentID;
});

Route::prefix('Admin')->group(function(){
    Route::get('User/{id}', function ($id){
        return 'User'.$id;
    });
    /**
     * Route for The Loai
     */
    // Index URI: category
    Route::get('category', function(){
        $listCategory = Category::all();
        return view('Category.index', array('listCategory' => $listCategory));

    })->name('category.index');

    // Create URI: category/create
    Route::get('category/create', function(){
        return view('category.create');
    })->name('category.create');

    // Store URI: category
    Route::post('category', function(Request $request){
        Category::create($request->all());
        return redirect()->route('category.index');
    })->name('category.store');

    // Show URI: category/{id}

    Route::get('category/{id}', function($id){
        $category = Category::find($id);
        return view('category.show', array('category' => $category));
    })->name('category.show');

    // Edit URI: category/{id}/edit
    Route::get('category/{id}/edit', function($id){
        $category = Category::find($id);
        return view('category.edit', array('category' => $category));
    })->name('category.edit');

    // Update URI: category/{id}
    Route::put('category/{id}', function($id, Request $request){
        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('category.index');
    })->name('category.update');

    // Delete URI: category/{id}
    Route::delete('category/{id}', function($id){
        Category::destroy($id);
        return redirect()->route('category.index');
    })->name('category.destroy');
    
});
