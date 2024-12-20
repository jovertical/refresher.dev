<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RefresherController;
use App\Http\Controllers\RefresherItemController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', WelcomeController::class);
Route::get('/dashboard', HomeController::class)->name('home');
Route::resource('refreshers', RefresherController::class);
Route::get('refreshers/{refresher}/items', [RefresherItemController::class, 'index'])
    ->name('refreshers.items.index');
Route::post('refreshers/{refresher}/items', [RefresherItemController::class, 'store'])
    ->name('refreshers.items.store');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
