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
Route::get('show-articles', 'ArticleController@showArticles')->name('showArticles');

Auth::routes();
Route::get('home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['role:admin']], function () {
    //admin creating/handling roles
    Route::get('create-role', 'AdminController@createRoleForm')->name('createRoleForm');
    Route::post('save-role', 'AdminController@saveRole')->name('saveRole');
    Route::get('show-roles', 'AdminController@showRoles')->name('showRoles');

    Route::get('create-permission', 'AdminController@createPermissionForm')->name('createpermissionForm');
    Route::post('save-permission', 'AdminController@savePermission')->name('savePermission');
    Route::get('show-permissions', 'AdminController@showPermissions')->name('showPermissions');

    Route::get('role-permission', 'AdminController@assignPermissionToRoleForm')->name('assignPermissionToRoleForm');
    Route::post('save-role-permission', 'AdminController@savePermissionsToRole')->name('savePermissionsToRole');

    Route::get('user-settings', 'AdminController@userSettings')->name('userSettings');
    Route::get('assign-role-user/{id}', 'AdminController@assignRoleToUserForm')->name('assignRoleToUserForm');
    Route::post('save-role-user/{id}', 'AdminController@saveRoleToUser')->name('saveRoleToUser');
});



//writer
Route::get('write-article', 'ArticleController@writeArticle')->name('writeArticle');
Route::post('publish-article/{id}', 'ArticleController@store')->name('publishArticle');


