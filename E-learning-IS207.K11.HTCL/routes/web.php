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
Route::get('/loginlophoc',function(){
    return view('HomePage.login');
});
Route::get('/trangchu',function(){
    return view('HomePage.homepage');
});
Route::get('/a/b',function(){
    return view('HomePage.login');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/footer', function(){
    return view('footer');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('/hocviens', 'HocvienController');
    Route::resource('/giaoviens', 'GiaovienController');

    Route::get('/dashboard', function () {
        return view('adminpage.dashboard');
    });
    Route::get('/giaovien', function () {
        return view('adminpage.giaovien');
    });


});
