<?php

use App\Http\Controllers\PaidMemberProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\PaidMember\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PaidMember\Auth\ConfirmablePasswordController;
use App\Http\Controllers\PaidMember\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\PaidMember\Auth\EmailVerificationPromptController;
use App\Http\Controllers\PaidMember\Auth\NewPasswordController;
use App\Http\Controllers\PaidMember\Auth\PasswordController;
use App\Http\Controllers\PaidMember\Auth\PasswordResetLinkController;
use App\Http\Controllers\PaidMember\Auth\RegisteredUserController;
use App\Http\Controllers\PaidMember\Auth\VerifyEmailController;

Route::get('/', function () {
    // return Inertia::render('PaidMember/Welcome', [
    return Inertia::render('PaidMember/UserHeader', [
        'canLogin' => Route::has('paid_member.login'),
        'canRegister' => Route::has('paid_member.register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('PaidMember/Dashboard');
})->middleware(['auth:paid_members', 'verified'])->name('dashboard');

Route::middleware('auth:paid_members')->group(function () {
    Route::get('profile', [PaidMemberProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [PaidMemberProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [PaidMemberProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest:paid_members')->group(function () {
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
                ->name('password.store');
});

Route::middleware('auth:paid_members')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
