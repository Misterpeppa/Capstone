<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\EMRController;
use App\Http\Controllers\Admin\InvController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\EmailController;
use App\Http\Controllers\User\NotificationController;
use App\Http\Controllers\User\ProfileController;
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
    Route::get('user/verify-email/{id}/{url}', [EmailController::class, 'verify'])->name('custom-verification');
    Route::post('/user/signin', [UserAuthController::class, 'authenticate'])->name('client.auth');
    Route::get('/user/logout', [UserAuthController::class, 'logout'])->name('client.logout');
    // Route::get('/user/forgotpassword', 'ForgotPasswordController');

});

Route::get('/email/verify', function () {
    return view('user.signin');
})->middleware('auth')->name('verification.notice');

use Illuminate\Foundation\Auth\EmailVerificationRequest;
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware(['clients'])->group(function () {

    Route::get('user/landing', [ProfileController::class, 'landing'])->name('landing');
    Route::view('user/contact', 'user/contact');
    Route::view('user/about', 'user/about');

    Route::get('/user/notification', [NotificationController::class, 'show'])->name('client.notification');
    Route::get('/user/profile', [ProfileController::class, 'show'])->name('client.profile');
Route::get('/user/password', [ProfileController::class, 'showPass'])->name('client.password');
    
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
Route::post('/admin/emr/vaxhistory', [EMRController::class, 'vaxhistory']);


Route::get('/admin/inventory', [InvController::class, 'show'])->name('admin_inv');
Route::post('/admin/inventory', [InvController::class, 'store'])->name('inv.store');
Route::post('/admin/inventory/addStock/{product_type}/{id}', [InvController::class, 'addStock'])->name('product.stock');
Route::get('/admin/inventory/view/{product_type}/{id}', [InvController::class, 'viewProduct']);
Route::match(['put', 'patch'],'/admin/inventory/edit/{product_type}/{id}', [InvController::class, 'updateProduct'])->name('product.edit');
Route::get('/admin/inventory/view/medicine/{id}', [InvController::class, 'viewMed']);
Route::get('/admin/inventory/view/vaccine/{id}', [InvController::class, 'viewVax']);
Route::get('/admin/inventory/view/vitamin/{id}', [InvController::class, 'viewVit']);


Route::get('admin/client', [ClientController::class, 'show'])->name('admin_client');
Route::post('admin/client', [ClientController::class, 'store'])->name(('client.store'));

Route::get('admin/dashboard', [DashboardController::class, 'show'])->name('admin_dashboard');
Route::post('admin/dashboard', [DashboardController::class, 'store'])->name('dashboard.client.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
