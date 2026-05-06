<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientConferenceController;
use App\Http\Controllers\EmployeeConferenceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConferenceController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/client/conferences', [ClientConferenceController::class, 'index'])->name('client.conferences.index');
Route::get('/client/conferences/{id}', [ClientConferenceController::class, 'show'])->name('client.conferences.show');
Route::post('/client/conferences/{id}/register', [ClientConferenceController::class, 'register'])->name('client.conferences.register');

Route::get('/employee/conferences', [EmployeeConferenceController::class, 'index'])->name('employee.conferences.index');
Route::get('/employee/conferences/{id}', [EmployeeConferenceController::class, 'show'])->name('employee.conferences.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [ConferenceController::class, 'dashboard'])->name('dashboard');

    Route::resource('conferences', ConferenceController::class);
    Route::resource('users', UserController::class)->except(['show']);
});