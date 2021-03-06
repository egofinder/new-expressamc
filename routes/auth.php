<?php

use App\Http\Controllers\AppraisalController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\GuestAppraisalAddonController;
use App\Http\Controllers\GuestAppraisalController;
use App\Http\Controllers\GuestLoanController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('order-appraisal-pacbay', [GuestAppraisalController::class, 'externalcreate']);
Route::get('guest-appraisals/{guest_appraisal_addon}/addon', [GuestAppraisalAddonController::class, 'addon']);
Route::get('guest-appraisals/{guest_appraisal_addon}/addonpayment', [GuestAppraisalAddonController::class, 'payment']);
Route::post('guest-appraisals/{guest_appraisal_addon}/addonpurchase', [GuestAppraisalAddonController::class, 'purchase']);

Route::post('guest-appraisals/{guest_appraisal}', [GuestAppraisalAddonController::class, 'store']);
Route::get('guest-appraisals/{guest_appraisal}/payment', [GuestAppraisalController::class, 'payment']);
Route::post('guest-appraisals/{guest_appraisal}/purchase', [GuestAppraisalController::class, 'purchase']);

Route::get('guest-loans/{guest_loan_number:TransDetailsLoan}', [GuestLoanController::class, 'show']);

Route::resource('guest-appraisals', GuestAppraisalController::class);

Route::middleware('guest')->group(function () {
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

    Route::resource('users', UserController::class);

    Route::resource('loans', LoanController::class);

    Route::get('appraisals/{appraisal}/payment', [AppraisalController::class, 'payment']);
    Route::post('appraisals/{appraisal}/refund', [AppraisalController::class, 'refund']);

    Route::post('appraisals/{appraisal}/purchase', [AppraisalController::class, 'purchase']);

    Route::resource('appraisals', AppraisalController::class);

});
