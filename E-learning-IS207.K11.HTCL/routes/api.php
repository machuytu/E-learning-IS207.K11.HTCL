<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');

    // Mon Hocs
    Route::apiResource('mon-hocs', 'MonHocApiController');

    // The Loais
    Route::apiResource('the-loais', 'TheLoaiApiController');

    // Co Sos
    Route::apiResource('co-sos', 'CoSoApiController');

    // Phong Hocs
    Route::apiResource('phong-hocs', 'PhongHocApiController');

    // Lops
    Route::post('lops/media', 'LopApiController@storeMedia')->name('lops.storeMedia');
    Route::apiResource('lops', 'LopApiController');

    // Bai Hocs
    Route::post('bai-hocs/media', 'BaiHocApiController@storeMedia')->name('bai-hocs.storeMedia');
    Route::apiResource('bai-hocs', 'BaiHocApiController');
});
