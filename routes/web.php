<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\GoogleAuthController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\MeetController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\EmailFormSubmissionController;


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
    return view('welcome');
});//in web.php


Route::get('/imen', function () {
    return view('imen');
});

Route::get('/hiba', function () {
    return view('hiba');
});


Route::get('/welcome', function () {
    return view('welcome');

});

Route::get('/taskboard', function () {
    return view('taskboard');

});

Route::get('/note', function () {
    return view('note');

});
Route::get('/google', function () {
    return view ('google');
});

Route::get('/hel',[HomeController::class ,'showCalendar']);



Route::middleware(['web'])->group(function () {
    Auth::routes();
    Route::middleware(['auth'])->group(function () {
        // your authenticated routes
    });
});
 Route::get('redirect/{driver}', [LoginController::class,'redirectToProvider']);
 Route::get('{driver}/callback', [LoginController::class,'handleProviderCallback']);

Auth::routes();

        // Login routes
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        //home
        Route::get('/app', [HomeController::class, 'app']);
        Route::post('/app', [HomeController::class, 'app'])->name('app');


        // Register routes
        Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

        // Email

        Route::get('/email/verify', [VerificationController::class,'show'])->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', [VerificationController::class,'verify'])->name('verification.verify');
        Route::post('/email/resend', [VerificationController::class,'resend'])->name('verification.resend');
        //passwords
        Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
        Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
        Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');

        Route::get('/home', [HomeController::class, 'index'])->name('home');
 Route::get('/settings/edit', [HomeController::class, 'user_edit'])->name('settings.edit');
        Route::put('/settings/{id}', [HomeController::class, 'user_update'])->name('settings.update');


//Calendar

Route::post('/submit-form', [FormController::class, 'submit'])->name('submit-form');
Route::post('/events/drop', [FormController::class, 'updateEvent'])->name('eventUpdate');
Route::put('/events/{id}', [FormController::class, 'update']);
Route::delete('/events/{id}', [FormController::class, 'destroy']);




Route::delete('user/{id}', [HomeController::class, 'user_delete'])->name('user.delete');
//Note routes 
Route::get('/notes/{id}', [FormController::class, 'editnote'])->name('notes.create');
Route::put('/notes/edit/{id}', [FormController::class, 'updatenote'])->name('notes.edit');
Route::delete('/notes/delete/{id}', [FormController::class, 'setNoteToNull'])->name('notes.delete');



Route::get('/taskboard', [FormController::class, 'index']);
Route::post('/submit', [FormController::class, 'submit']);
Route::put('/update/{id}', [FormController::class, 'update']);
Route::delete('/destroy/{id}', [FormController::class, 'destroy']);







// dashboard  line chart 
Route::get('/dashboard', [FormController::class, 'showDashboard'])->name('showDashboard');



Route::GET('/email-status', [EmailFormSubmissionController::class,'updateStatus'])->name('email.status');

