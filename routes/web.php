<?php

use Illuminate\Support\Facades\Route;

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
});
