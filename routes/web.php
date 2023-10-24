<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\EMRController;
use App\Http\Controllers\Admin\InvController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ClientController;
use Carbon\Cli\Invoker;
use Faker\Guesser\Name;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user/signup');
});

Route::middleware(['guest'])->group(function () {

    Route::get('/user/signup', [UserAuthController::class, 'showSignup']);
    Route::post('/user/signup', [UserAuthController::class, 'signup'])->name('client.signup');
    
    Route::get('/user/signin',[UserAuthController::class, 'showSignin'])->name('client.signin');
    Route::post('/user/signin', [UserAuthController::class, 'authenticate'])->name('client.auth');
    Route::post('/user/logout', [UserAuthController::class, 'logout'])->name('client.logout');
    // Route::get('/user/forgotpassword', 'ForgotPasswordController');

});


Route::middleware(['clients'])->group(function () {

    Route::view('user/landing', 'user/landing')->name('landing');
    Route::view('user/contact', 'user/contact');
    Route::view('user/about', 'user/about');
    
    Route::get('/user/appointment', [AppointmentController::class, 'showForm'])->name('appointment.form');
    Route::post('/user/appointment', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/user/appointment/list', [AppointmentController::class, 'list'])->name('appointment.list');

});

Route::get('/admin/signup', [AdminAuthController::class, 'show']);
Route::post('/admin/signup',[AdminAuthController::class, 'store']);

Route::get('/admin/signin', [AdminAuthController::class, 'show']);
Route::post('/admin/signin',[AdminAuthController::class, 'store']);

Route::get('/admin/appointment', [AppointmentController::class, 'adminShow'])->name('admin_appointment');
Route::post('/admin/appointment/approve/{id}', [AppointmentController::class, 'approve']);
Route::post('/admin/admin/appointment/reject/{id}', [AppointmentController::class, 'reject']);
Route::get('/admin/admin.appointment', 'AppointmentController@adminShow');
Route::post('/admin/appointmet/approve/{id}', 'AppointmentController@approve');
Route::post('/admin/appointment/reject/{id}', 'AppointmentController@reject');

Route::get('/admin/emr', [EMRController::class, 'show'])->name('admin_emr');
Route::post('/admin/emr/petrecord', [EMRController::class, 'pet'])->name('emr.pet');
Route::post('/admin/emr/vaxhistory', [EMRController::class, 'vaxhistory']);


Route::get('/admin/inventory', [InvController::class, 'show'])->name('admin_inv');
Route::post('/admin/inventory', [InvController::class, 'store'])->name('inv.store');
Route::get('/admin/inventory/view/{product_type}/{id}', [InvController::class, 'viewProduct']);
Route::patch('/admin/inventory/edit/{product_type}/{id}', [InvController::class, 'updateProduct'])->name('product.edit');
Route::get('/admin/inventory/view/medicine/{id}', [InvController::class, 'viewMed']);
Route::get('/admin/inventory/view/vaccine/{id}', [InvController::class, 'viewVax']);
Route::get('/admin/inventory/view/vitamin/{id}', [InvController::class, 'viewVit']);


Route::get('admin/client', [ClientController::class, 'show'])->name('admin_client');



