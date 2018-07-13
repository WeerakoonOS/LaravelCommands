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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'FormController@viewTest')->name('test');

Route::get('/form', 'FormController@form')->name('form');

Route::post('/submitForm', 'FormController@submitForm');

Route::resource('book', 'BookController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/test_try', 'TestController@index');
Route::get('/url_check', 'TestController@url_check')->name('helloGuys');
Route::get('/error_check', 'TestController@error_check');


Route::get('/exit', function () {
    $greet = Artisan::call('Hello:greet');
    return $greet;
});