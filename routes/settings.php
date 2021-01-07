<?php

use App\Http\Controllers\Settings\ProfileController;

Route::get('settings/profile', [ProfileController::class, 'edit'])
    ->name('settings.profile.edit');

Route::patch('settings/profile', [ProfileController::class, 'update'])
    ->name('settings.profile.update');
