<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\ClientController;
use App\Http\Controllers\Auth\TeacherController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest:teacher')->group(function(){

    // Teacher auth

    Route::get('teacher/login', [TeacherController::class, 'showLoginPage'])
                ->name('showloginpage');

    Route::post('teacher/login', [TeacherController::class, 'login'])->name('teacher.login');

});

Route::post('teacher/logout', [TeacherController::class, 'logout'])->name('teacher.logout');
Route::post('client/logout', [ClientController::class, 'logout'])->name('client.logout');

Route::middleware('guest:client')->group(function(){

    // Client auth

    Route::get('client/register', [ClientController::class, 'showRegisterPage'])
                ->name('showRegisterPage');

    Route::post('client/register', [ClientController::class, 'store'])->name('client.register');

    Route::get('client/login', [ClientController::class, 'showLoginPage'])
                ->name('showLoginPage');

    Route::post('client/login', [ClientController::class, 'login'])->name('client.login');

});


Route::middleware('guest:web')->group(function () {

    // Admin auth
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
