<?php

use App\Http\Controllers\Settings\PasswordController;
use App\Http\Controllers\Settings\ProfileController;

Route::get('settings/profile', [ProfileController::class, 'edit'])
    ->name('settings.profile.edit');

Route::patch('settings/profile', [ProfileController::class, 'update'])
    ->name('settings.profile.update');

Route::get('settings/password', [PasswordController::class, 'edit'])
    ->name('settings.password.edit');

Route::patch('settings/password', [PasswordController::class, 'update'])
    ->name('settings.password.update');
