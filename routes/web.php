<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\EMRController;
use App\Http\Controllers\Admin\InvController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Auth\EmailController;
use App\Http\Controllers\User\NotificationController;
use App\Http\Controllers\User\PetInfoController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Middleware\UserAuth;
use App\Models\Admin\PetInfo;
use Carbon\Cli\Invoker;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;

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

Route::get('/test', function () {
    return view('test');
});

Route::middleware(['guest'])->group(function () {

    Route::get('/user/signup', [UserAuthController::class, 'showSignup']);
    Route::post('/user/signup', [UserAuthController::class, 'signup'])->name('client.signup');
    
    Route::get('/user/signin', [UserAuthController::class, 'showSignin'])->name('client.signin');
    Route::post('/user/signin', [UserAuthController::class, 'authenticate'])->name('client.auth');
    Route::get('/user/logout', [UserAuthController::class, 'logout'])->name('client.logout');

});

Route::get('user/forgotpassword', [UserAuthController::class, 'showForgotpass'])->name('client.forgotpass');

Route::middleware(['clients'])->group(function () {
    Route::get('user/verify-email/{id}/{url}', [EmailController::class, 'verify'])->name('verification.verify');

    Route::get('user/landing', [ProfileController::class, 'landing'])->name('landing');
    Route::view('user/contact', 'user/contact');
    Route::view('user/about', 'user/about');

    Route::get('/user/profile', [ProfileController::class, 'show'])->name('client.settings');
    Route::put('/user/profile/edit', [ProfileController::class, 'editProfile'])->name('client.profile');
    Route::post('/user/profile/delete', [ProfileController::class, 'deleteAccnt'])->name('client.delete');
    Route::put('/user/profile/changepassword', [ProfileController::class, 'changePassword'])->name('client.changepassword');
    Route::get('/user/password', [ProfileController::class, 'showPass'])->name('client.password');
    Route::get('/user/pet_info', [ProfileController::class, 'showPetInfo'])->name('client.pet');
    Route::post('/user/pet_info', [PetInfoController::class, 'addPet'])->name('client.addPet');
    
    Route::get('/user/appointment', [AppointmentController::class, 'showForm'])->name('appointment.form');
    Route::post('/user/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/user/appointment/list', [AppointmentController::class, 'list'])->name('appointment.list');

});

Route::get('/admin/signup', [AdminAuthController::class, 'show']);
Route::post('/admin/signup',[AdminAuthController::class, 'store']);
Auth::routes(['verify' => true]);

Route::get('/admin/signin', [AdminAuthController::class, 'show']);
Route::post('/admin/signin',[AdminAuthController::class, 'store']);

Route::get('/admin/appointment', [AppointmentController::class, 'adminShow'])->name('admin_appointment');
Route::post('/admin/appointment/approve/{id}', [AppointmentController::class, 'approve']);
Route::post('/admin/appointment/reject/{id}', [AppointmentController::class, 'reject']);

Route::get('/admin/emr', [EMRController::class, 'show'])->name('admin_emr');
Route::post('/admin/emr/petrecord', [EMRController::class, 'pet'])->name('emr.pet');
Route::get('/admin/emr/view/{id}', [EMRController::class, 'viewRecord']);
Route::post('/admin/emr/medhistory', [EMRController::class, 'medHistory'])->name('med.history');
Route::post('/admin/emr/vaxhistory', [EMRController::class, 'vaxHistory'])->name('vax.history');
Route::post('/admin/emr/surghistory', [EMRController::class, 'surgHistory'])->name('surg.history');
Route::get('/admin/emr/medhis/{id}', [EMRController::class, 'showMedHis']);
Route::get('/admin/emr/vaxhis/{id}', [EMRController::class, 'showVaxHis']);
Route::get('/admin/emr/surghis/{id}', [EMRController::class, 'showSurgHis']);


Route::get('/admin/inventory', [InvController::class, 'show'])->name('admin_inv');
Route::post('/admin/inventory', [InvController::class, 'store'])->name('inv.store');
Route::post('/admin/inventory/addStock/{product_type}/{id}', [InvController::class, 'addStock'])->name('product.stock');
Route::get('/admin/inventory/view/{product_type}/{id}', [InvController::class, 'viewProduct']);
Route::match(['put', 'patch'],'/admin/inventory/edit/{product_type}/{id}', [InvController::class, 'updateProduct'])->name('product.edit');
Route::get('/admin/inventory/reports', [ReportController::class, 'invPDF'])->name('report.inventory');

Route::get('admin/client', [ClientController::class, 'show'])->name('admin_client');
Route::post('admin/client', [ClientController::class, 'store'])->name(('client.store'));
Route::get('admin/client/reports', [ReportController::class, 'clientPDF'])->name('report.client');

Route::get('admin/dashboard', [DashboardController::class, 'show'])->name('admin_dashboard');
Route::post('admin/dashboard', [DashboardController::class, 'store'])->name('dashboard.client.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
