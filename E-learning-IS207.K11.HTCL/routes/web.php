<?php

use App\Http\Controllers\LopsController;


Route::post('/getinfo','HomeController@getinfo');
// homepage
Route::get('/', 'HomeController@index');
Route::get('/class', ['uses' => 'HomeController@index', 'as' => 'lop.index']);

// get status
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

// login
Route::get('/loginlophoc', function () {
    return view('HomePage.login');
});

// dashboard hoc vien
Route::get('/dashboard', 'DashboardSVController@index');
Route::get('dashboardbaihoc/{ten_link}', ['uses' => 'DashboardSVBaiHocController@show', 'as' => 'lops.show']);
Route::get('dashboardbaihocCT/{lien_quan}', ['uses' => 'DashboardSVBaiHocCTController@show', 'as' => 'baihocs.show']);


Route::get('/trangchu/lop', function () {
    return view('Homepage.lopdanhmuc');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('auth.logout');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['admin']], function () {
    Route::get('/', 'DashboardController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');
    Route::resource('users', 'UsersController');

    // Mon Hocs
    Route::delete('mon-hocs/destroy', 'MonHocController@massDestroy')->name('mon-hocs.massDestroy');
    Route::resource('mon-hocs', 'MonHocController');

    // The Loais
    Route::delete('the-loais/destroy', 'TheLoaiController@massDestroy')->name('the-loais.massDestroy');
    Route::resource('the-loais', 'TheLoaiController');

    // Co Sos
    Route::delete('co-sos/destroy', 'CoSoController@massDestroy')->name('co-sos.massDestroy');
    Route::resource('co-sos', 'CoSoController');

    // Phong Hocs
    Route::delete('phong-hocs/destroy', 'PhongHocController@massDestroy')->name('phong-hocs.massDestroy');
    Route::resource('phong-hocs', 'PhongHocController');

    // Lops
    Route::delete('lops/destroy', 'LopController@massDestroy')->name('lops.massDestroy');
    Route::post('lops/media', 'LopController@storeMedia')->name('lops.storeMedia');
    Route::resource('lops', 'LopController');

    // Bai Hocs
    Route::delete('bai-hocs/destroy', 'BaiHocController@massDestroy')->name('bai-hocs.massDestroy');
    Route::post('bai-hocs/media', 'BaiHocController@storeMedia')->name('bai-hocs.storeMedia');
    Route::resource('bai-hocs', 'BaiHocController');

     // Thong Baos
     Route::delete('thong-baos/destroy', 'ThongBaoController@massDestroy')->name('thong-baos.massDestroy');
     Route::resource('thong-baos', 'ThongBaoController');
});
