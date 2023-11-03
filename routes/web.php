<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/', [App\Http\Controllers\CopyController::class, 'index']);
Route::get('clock/clock', [App\Http\Controllers\ClockController::class, 'index']);
Route::get('sign-form.sign_in', [App\Http\Controllers\SignInFormController::class, 'index']);
Route::get('background_color.color', [App\Http\Controllers\BackgroundColorController::class, 'index']);
Route::get('light_dark.mode', [App\Http\Controllers\LightDarkController::class, 'index']);
Route::get('card_ui_design.card', [App\Http\Controllers\CardUiDesignController::class, 'index']);
Route::get('toggle_btn.day_night', [App\Http\Controllers\ToggleButtonController::class, 'index']);