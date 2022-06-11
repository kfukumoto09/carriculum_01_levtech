<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/posts', function() {
    return view('posts/index');
});
*/

Route::get('/posts', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show')
        ->where('post', '[0-9]{0,3}')

/*
Route::get('/posts/{id}', 'PostController@show')
        ->where('id', '[0-9]{0,3}')
*/        
        
        
        /*
        ->where('id', '[0-9]{,3}') 
        */

/*
Route::get('/posts/{id}', function ($id = null) {
    return 'PostController@show'$id;
})
*/

?>