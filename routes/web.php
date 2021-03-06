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
});
Route::get('foo', function (){
    $a=1;
    $b=2;
    return $a.'+'.$b. '='.($a + $b);
});
Route::get('User/{id}', function ($id){
    return 'User'.$id;
});
Route::get('post/{post}/comment/{comment}', function ($postID, $CommentID){
    return 'Post: '.$postID.'<br>'.' Comment: '.$CommentID;
});
Route::get('user/{name?}', function ($name= 'hahaha'){
    return $name;
});
Route::prefix('Admin')->group(function(){
    Route::get('User/{id}', function ($id){
        return 'User'.$id;
    });
});
