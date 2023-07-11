<?php

use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});


Route::prefix('/admin')->namespace('Admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {


    Route::get('/', [ AdminController::class, 'index'])->name('index');

    Route::as('users.')->prefix('users')->group(function () {

        Route::get('/',                    [ UsersController::class, 'index'])->name('index');
        Route::get('create',               [ UsersController::class, 'create'])->name('create');
        Route::post('store',               [ UsersController::class, 'store'])->name('store');
        Route::get('edit/{id',             [ UsersController::class, 'edit'])->name('edit');
        Route::post('update',              [ UsersController::class, 'update'])->name('update');
        Route::get('delete/{id}',          [ UsersController::class, 'destroy'])->name('destroy');
        Route::get('deleted',              [ UsersController::class, 'viewDeleted'])->name('viewDeleted');
        Route::get('restore/{id}',         [ UsersController::class, 'restore'])->name('restore');
        Route::get('deletePermanent/{id}', [ UsersController::class, 'permanentDestroy'])->name('permanentDestroy');
    });

    Route::as('roles.')->prefix('roles')->group(function () {
        Route::get('/',                    [ RolesController::class, 'index'])->name('index');
        Route::get('create',               [ RolesController::class, 'create'])->name('create');
        Route::post('store',               [ RolesController::class, 'store'])->name('store');
        Route::get('edit/{id}',            [ RolesController::class, 'edit'])->name('edit');
        Route::post('update',              [ RolesController::class, 'update'])->name('update');
        Route::get('delete/{id}',          [ RolesController::class, 'destroy'])->name('destroy');
    });


    Route::as('permissions.')->prefix('permissions')->group(function () {
        Route::get('/',                    [ PermissionsController::class, 'index'])->name('index');
        Route::get('create',               [ PermissionsController::class, 'create'])->name('create');
        Route::post('store',               [ PermissionsController::class, 'store'])->name('store');
        Route::get('edit/{id}',            [ PermissionsController::class, 'edit'])->name('edit');
        Route::post('update',              [ PermissionsController::class, 'update'])->name('update');
        Route::get('delete/{id}',          [ PermissionsController::class, 'destroy'])->name('destroy');
    });
    
    // ROUTE FOR HISTORY
    Route::get('/application-history/', 'HistoriesController@application_index')->name('application-history');
    Route::get('/system-history/', 'HistoriesController@system_index')->name('system-history');
   
});

Route::prefix('/profile')->name('profile.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', 'ProfilesController@index')->name('index');
    Route::post('/update/info', 'ProfilesController@updateInfo')->name('update.info');
    Route::post('/update/password', 'ProfilesController@updatePassword')->name('update.password');
});

