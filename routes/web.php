<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\EMRController;
use App\Http\Controllers\Admin\InvController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ArchiveController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\User\NotificationController;
use App\Http\Controllers\User\PetInfoController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Middleware\UserAuth;
use App\Models\Admin\PetInfo;
use Carbon\Cli\Invoker;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

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
Route::get('/appointment2', function (){
    return view('user/appointment2');
});

Route::middleware(['signedout', 'nocache'])->group(function () {
    Route::get('/', [UserAuthController::class, 'showSignin']);
    Route::get('/user/signup', [UserAuthController::class, 'showSignup']);
    Route::post('/user/signup', [UserAuthController::class, 'signup'])->name('client.signup');
    
    Route::get('/user/signin', [UserAuthController::class, 'showSignin'])->name('client.signin');
    Route::post('/user/signin', [UserAuthController::class, 'authenticate'])->name('client.auth');
});

Route::get('user/forgotpassword', [UserAuthController::class, 'showForgotpass'])->name('client.forgotpass');
Route::post('user/forgotpassword', [UserAuthController::class, 'forgotPass'])->name('password.form');
Route::post('user/forgotpasswordcode', [UserAuthController::class, 'checkResetCode'])->name('password.code');
Route::get('user/forgotpasswordcode', [UserAuthController::class, 'showCodeForm'])->name('code.form');
Route::get('user/forgotpasswordreset', [UserAuthController::class, 'showPasswordReset'])->name('reset.form');
Route::post('user/forgotpassReset', [UserAuthController::class, 'resetPassword'])->name('reset.password');


Route::middleware(['clients', 'nocache'])->group(function () {
    Route::get('/user/logout', [UserAuthController::class, 'logout'])->name('client.logout');

    Route::get('user/verify-email/{id}/{hash}', [EmailController::class, 'verify'])->name('verification');
    Route::post('user/verify-resend/{clientId}', [EmailController::class, 'resend'])->name('resend');

    Route::get('user/landing', [ProfileController::class, 'landing'])->name('landing');
    Route::view('user/contact', 'user/contact');
    Route::view('user/about', 'user/about');

    Route::get('/user/profile', [ProfileController::class, 'show'])->name('client.settings');
    Route::put('/user/profile/edit', [ProfileController::class, 'editProfile'])->name('client.profile');
    Route::post('/user/profile/delete', [ProfileController::class, 'deleteAccnt'])->name('client.delete');
    Route::post('/user/profile/changepassword', [ProfileController::class, 'changePassword'])->name('client.changepassword');
    Route::get('/user/password', [ProfileController::class, 'showPass'])->name('client.password');

    Route::get('/user/pet_info', [ProfileController::class, 'showPetInfo'])->name('client.pet');
    Route::post('/user/pet_info', [PetInfoController::class, 'addPet'])->name('client.addPet');
    Route::post('/user/pet_info/edit', [PetInfoController::class, 'editPet'])->name('client_pet.edit');
    Route::get('/user/pet_info/view/{id}', [PetInfoController::class, 'viewRecord']);
    Route::post('/user/pet_info/appointment', [PetInfoController::class, 'appointmentPet'])->name('appointment.pet');
    Route::get('/user/pet_info/appointment/pet/{id}', [PetInfoController::class, 'petInfo']);
    Route::get('/user/pet_info/medhis/{id}', [PetInfoController::class, 'showMedHis']);
    Route::get('/user/pet_info/vaxhis/{id}', [PetInfoController::class, 'showVaxHis']);
    Route::get('/user/pet_info/surghis/{id}', [PetInfoController::class, 'showSurgHis']);
    
    Route::get('/user/appointment', [AppointmentController::class, 'showForm'])->name('appointment.form');
    Route::post('/user/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/user/appointment/list', [AppointmentController::class, 'list'])->name('appointment.list');

});

Route::get('/admin/signup', [AdminAuthController::class, 'show']);
Route::post('/admin/signup',[AdminAuthController::class, 'store']);
Auth::routes(['verify' => true]);

Route::middleware('adminauth', 'nocache')->group(function () {
    Route::get('/admin/signin', [AdminAuthController::class, 'show'])->name('admin.signin');
    Route::post('/admin/signin',[AdminAuthController::class, 'authenticate'])->name('admin.auth');
});

Route::get('admin/forgotpassword', [AdminAuthController::class, 'showForgotpass'])->name('admin.forgotpass');
Route::post('admin/forgotpassword', [AdminAuthController::class, 'forgotPass'])->name('admin.password.form');
Route::post('admin/forgotpasswordcode', [AdminAuthController::class, 'checkResetCode'])->name('admin.password.code');
Route::get('admin/forgotpasswordcode', [AdminAuthController::class, 'showCodeForm'])->name('admin.code.form');
Route::get('admin/forgotpasswordreset', [AdminAuthController::class, 'showPasswordReset'])->name('admin.reset.form');
Route::post('admin/forgotpassReset', [AdminAuthController::class, 'resetPassword'])->name('admin.reset.password');

Route::middleware('admin', 'nocache')->group(function () {
    Route::get('/admin/signout', [AdminAuthController::class, 'signout'])->name('admin.signout');
    Route::post('/admin/settings/changepassword', [AdminAuthController::class, 'changePassword'])->name('admin.changepassword');


    Route::get('/admin/appointment', [AppointmentController::class, 'adminShow'])->name('admin_appointment');
    Route::post('/admin/appointment/approve/{id}', [AppointmentController::class, 'approve']);
    Route::post('/admin/appointment/reject/{id}', [AppointmentController::class, 'reject'])->name('reject');
    Route::post('/admin/appointment/resched/{id}', [AppointmentController::class, 'resched'])->name('resched');
    Route::post('/admin/appointment/markascomplete/{id}', [AppointmentController::class, 'markAsComplete'])->name('appointment.complete');
    Route::post('/admin/appointment/archive/{id}', [AppointmentController::class, 'archive'])->name('appointment.archive');
    Route::get('/admin/appointmet/report', [ReportController::class, 'appointmentPDF'])->name('appointment.pdf');

    Route::get('/admin/emr', [EMRController::class, 'show'])->name('admin_emr');
    Route::post('/admin/emr/petrecord', [EMRController::class, 'pet'])->name('emr.pet');
    Route::get('/admin/emr/view/{id}', [EMRController::class, 'viewRecord']);
    Route::post('/admin/emr/medhistory', [EMRController::class, 'medHistory'])->name('med.history');
    Route::post('/admin/emr/vaxhistory', [EMRController::class, 'vaxHistory'])->name('vax.history');
    Route::post('/admin/emr/surghistory', [EMRController::class, 'surgHistory'])->name('surg.history');
    Route::post('/admin/emr/edit', [EMRController::class, 'editPet'])->name('edit.petrecord');
    Route::post('/admin/emr/archive', [EMRController::class, 'archive'])->name('archive.petrecord');
    Route::get('/admin/emr/medhis/{id}', [EMRController::class, 'showMedHis']);
    Route::get('/admin/emr/vaxhis/{id}', [EMRController::class, 'showVaxHis']);
    Route::get('/admin/emr/surghis/{id}', [EMRController::class, 'showSurgHis']);
    Route::get('/admin/emr/reports', [ReportController::class, 'petrecordPDF'])->name('report.emr');
    Route::get('/admin/emr/search', [EMRController::class, 'search'])->name('emr.search');

    Route::get('/admin/inventory', [InvController::class, 'show'])->name('admin_inv');
    Route::post('/admin/inventory', [InvController::class, 'store'])->name('inv.store');
    Route::post('/admin/inventory/addStock/{product_type}/{id}', [InvController::class, 'addStock'])->name('product.stock');
    Route::get('/admin/inventory/view/{product_type}/{id}', [InvController::class, 'viewProduct']);
    Route::post('/admin/inventory/edit', [InvController::class, 'updateProduct'])->name('product.edit');
    Route::post('/admin/inventory/archive/{product_type}/{id}', [InvController::class, 'archive'])->name('product.archive');
    Route::get('/admin/inventory/viewBatch/{product_type}/{id}', [InvController::class, 'viewBatch']);
    Route::get('/admin/inventory/batchDetails/{product_type}/{id}/{batchNo}', [InvController::class, 'batchDetails']);
    Route::post('/admin/inventory/deduct', [InvController::class, 'deductStock'])->name('deduct');
    Route::get('/admin/inventory/reports', [ReportController::class, 'invPDF'])->name('report.inventory');

    Route::get('admin/client', [ClientController::class, 'show'])->name('admin_client');
    Route::post('admin/client', [ClientController::class, 'store'])->name(('client.store'));
    Route::post('admin/client/edit', [ClientController::class, 'editClient'])->name(('client.edit'));
    Route::get('admin/client/reports', [ReportController::class, 'clientPDF'])->name('report.client');
    Route::post('admin/client/archive', [ClientController::class, 'archiveClient'])->name('client.archive');
    Route::post('admin/client/addpet', [ClientController::class, 'addPet'])->name('client.addpet');
    Route::get('admin/client/viewpet/{id}', [ClientController::class, 'viewPet']);



    Route::get('admin/dashboard', [DashboardController::class, 'show'])->name('admin_dashboard');
    Route::post('admin/dashboard', [DashboardController::class, 'store'])->name('dashboard.client.store');

    Route::get('admin/settings', [SettingsController::class, 'show'])->name('admin_settings');

    Route::get('admin/archive', [ArchiveController::class, 'show'])->name('admin_archive');
    Route::post('admin/archive/unarchived/{product_type}/{id}', [ArchiveController::class, 'unarchived'])->name('admin.unarchived');
    Route::post('admin/archive/medicine/{id}', [ArchiveController::class, 'unarchiveMed'])->name('unarchive.med');
    Route::post('admin/archive/vaccine/{id}', [ArchiveController::class, 'unarchiveVax'])->name('unarchive.vax');
    Route::post('admin/archive/vitamin/{id}', [ArchiveController::class, 'unarchiveVit'])->name('unarchive.vit');
    Route::post('admin/archive/petrecord/{id}', [ArchiveController::class, 'unarchivePetRec'])->name('unarchive.petrec');
    Route::post('admin/archive/appointment/{id}', [ArchiveController::class, 'unarchiveAppointment'])->name('unarchive.appointment');
    Route::post('admin/archive/client/{id}', [ArchiveController::class, 'unarchiveClient'])->name('unarchive.client');


});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
