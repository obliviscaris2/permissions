<?php

use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\OffenderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TranPurposeController;
use App\Http\Controllers\TranProofController;
use App\Http\Controllers\TranNatureController;
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
        Route::get('edit/{id}',            [ UsersController::class, 'edit'])->name('edit');
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


    Route::as('registration.')->prefix('registration')->group(function(){
        Route::get('index', [RegistrationController::class, 'index'])->name('index');
        Route::get('create', [RegistrationController::class, 'create'])->name('create');
        Route::get('edit/{id}', [RegistrationController::class, 'edit'])->name('edit');
        Route::post('update', [RegistrationController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [RegistrationController::class, 'destroy'])->name('destroy');
        Route::post('store', [RegistrationController::class, 'store'])->name('store');
    });

    Route::as('applicant.')->prefix('applicant')->group(function(){
        Route::get('index', [ApplicantController::class, 'index'])->name('index');
        Route::get('create', [ApplicantController::class, 'create'])->name('create');
        Route::get('edit/{id}', [ApplicantController::class, 'edit'])->name('edit');
        Route::post('update', [ApplicantController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [ApplicantController::class, 'destroy'])->name('destroy');
        Route::post('store', [ApplicantController::class, 'store'])->name('store');

        Route::get('get-districts/{state_id}', [ApplicantController::class, 'getDistricts'])->name('getDistricts');
        Route::get('get-local-governments/{district_id}', [ApplicantController::class, 'getLocalGovernments'])->name('getLocalGovernments');

    });


    Route::as('offender.')->prefix('offender')->group(function(){
        Route::get('index', [OffenderController::class, 'index'])->name('index');
        Route::get('create', [OffenderController::class, 'create'])->name('create');
        Route::get('edit/{id}', [OffenderController::class, 'edit'])->name('edit');
        Route::post('update', [OffenderController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [OffenderController::class, 'destroy'])->name('destroy');
        Route::post('store', [OffenderController::class, 'store'])->name('store');
        Route::get('get-districts/{state_id}', [ApplicantController::class, 'getDistricts'])->name('getDistricts');
        Route::get('get-local-governments/{district_id}', [ApplicantController::class, 'getLocalGovernments'])->name('getLocalGovernments');
    });


    Route::as('transaction.')->prefix('transaction')->group(function(){
        Route::get('index', [TransactionController::class, 'index'])->name('index');
        Route::get('create', [TransactionController::class, 'create'])->name('create');
        Route::get('edit/{id}', [TransactionController::class, 'edit'])->name('edit');
        Route::post('update', [TransactionController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [TransactionController::class, 'destroy'])->name('destroy');
        Route::post('store', [TransactionController::class, 'store'])->name('store');
    });

    Route::as('tranpurpose.')->prefix('tranpurpose')->group(function(){
        Route::get('index', [TranPurposeController::class, 'index'])->name('index');
        Route::get('create', [TranPurposeController::class, 'create'])->name('create');
        Route::get('edit/{id}', [TranPurposeController::class, 'edit'])->name('edit');
        Route::post('update', [TranPurposeController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [TranPurposeController::class, 'destroy'])->name('destroy');
        Route::post('store', [TranPurposeController::class, 'store'])->name('store');
    });


    Route::as('trannature.')->prefix('trannature')->group(function(){
        Route::get('index', [TranNatureController::class, 'index'])->name('index');
        Route::get('create', [TranNatureController::class, 'create'])->name('create');
        Route::get('edit/{id}', [TranNatureController::class, 'edit'])->name('edit');
        Route::post('update', [TranNatureController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [TranNatureController::class, 'destroy'])->name('destroy');
        Route::post('store', [TranNatureController::class, 'store'])->name('store');
    });


    Route::as('tranproof.')->prefix('tranproof')->group(function(){
        Route::get('index', [TranProofController::class, 'index'])->name('index');
        Route::get('create', [TranProofController::class, 'create'])->name('create');
        Route::get('edit/{id}', [TranProofController::class, 'edit'])->name('edit');
        Route::post('update', [TranProofController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [TranProofController::class, 'destroy'])->name('destroy');
        Route::post('store', [TranProofController::class, 'store'])->name('store');
    });


   
});

Route::prefix('/profile')->name('profile.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', 'ProfilesController@index')->name('index');
    Route::post('/update/info', 'ProfilesController@updateInfo')->name('update.info');
    Route::post('/update/password', 'ProfilesController@updatePassword')->name('update.password');
});

