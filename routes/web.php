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
 Route::get('/About/{name}/{age}', function ($name, $age) {
    return "This is user".$name."with age of".$age;
 });
 Route::get('/hello', function () {
    // return view('welcome');
    return 'Hello World';
 });
 Route::get('/', function () {
    return view('welcome');
});
 */


 Route::get('/about', 'PagesController@about');
 Route::get('/index', 'PagesController@index');
 Route::get('/services', 'PagesController@services');

 Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');