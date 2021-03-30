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

    
    /**
     * Route for NewsType
     * 
     */
    //Index URI:  newstype 
    Route::get('newstype', function(){
        $listNewsType = NewsType::all();
        return view('newstype.index', array('listNewsType' => $listNewsType));
    })->name('newstype.index');
    //Create URI: newstype/create
    Route::get('newstype/create', function(){
        return view('newstype.create');
    })->name('newstype.create');
    //Store URI: newstype
    Route::post('newstype', function(Request $request){
        NewsType::create($request->all());
        return redirect()->route('newstype.index');
    })->name('newstype.store');

    //Show URI: newstype/{id}
    Route::get('newstype/{id}', function($id){
        $newstype = NewsType::find($id);
        return view('newstype.show', array('newstype' => $newstype));
    })->name('newstype.show');

    //Edit URI: newstype/{id}/edit
    Route::get('newstype/{id}/edit', function($id){
        $newstype = NewsType::find($id);
        return view('newstype.edit', array('newstype' => $newstype));
    })->name('newstype.edit');

    //Update URI: newstype/{id}
    Route::put('newstype/{id}', function($id, Request $request){
        $newstype = NewsType::find($id);
        $newstype->update($request->all());
        return redirect()->route('newstype.index');
    })->name('newstype.update');

    //Delete URI: newstype/{id}
    Route::delete('newstype/{id}', function($id){
        NewsType::destroy($id);
        return redirect()->route('newstype.index');
    })->name('newstype.destroy');


    
});
