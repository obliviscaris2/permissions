<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});


Route::prefix('/admin')->namespace('Admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {


    Route::get('/', [ AdminController::class, 'index'])->name('index');

    //Users
    Route::get('/users/', 'UsersController@index')->name('users.index');
    Route::get('/users/create', 'UsersController@create')->name('users.create');
    Route::post('/users/store', 'UsersController@store')->name('users.store');
    Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
    Route::post('/users/update', 'UsersController@update')->name('users.update');
    Route::get('/users/delete/{id}', 'UsersController@destroy')->name('users.destroy');
    Route::get('/users/deleted', 'UsersController@viewDeleted')->name('users.viewDeleted');
    Route::get('/users/restore/{id}', 'UsersController@restore')->name('users.restore');
    Route::get('/users/deletePermanent/{id}', 'UsersController@permanentDestroy')->name('users.permanentDestroy');

    //Roles
    Route::get('/roles/', 'RolesController@index')->name('roles.index');
    Route::get('/roles/create', 'RolesController@create')->name('roles.create');
    Route::post('/roles/store', 'RolesController@store')->name('roles.store');
    Route::get('/roles/edit/{id}', 'RolesController@edit')->name('roles.edit');
    Route::post('/roles/update', 'RolesController@update')->name('roles.update');
    Route::get('/roles/delete/{id}', 'RolesController@destroy')->name('roles.destroy');

    //Permissions
    Route::get('/permissions/', 'PermissionsController@index')->name('permissions.index');
    Route::get('/permissions/create', 'PermissionsController@create')->name('permissions.create');
    Route::post('/permissions/store', 'PermissionsController@store')->name('permissions.store');
    Route::get('/permissions/edit/{id}', 'PermissionsController@edit')->name('permissions.edit');
    Route::post('/permissions/update', 'PermissionsController@update')->name('permissions.update');
    Route::get('/permissions/delete/{id}', 'PermissionsController@destroy')->name('permissions.destroy');

    //History
    Route::get('/application-history/', 'HistoriesController@application_index')->name('application-history');
    Route::get('/system-history/', 'HistoriesController@system_index')->name('system-history');

   
});

Route::prefix('/profile')->name('profile.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', 'ProfilesController@index')->name('index');
    Route::post('/update/info', 'ProfilesController@updateInfo')->name('update.info');
    Route::post('/update/password', 'ProfilesController@updatePassword')->name('update.password');
});

