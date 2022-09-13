<?php

use App\Http\Controllers\Admin\AppointmentsAdminController;
use App\Http\Controllers\Admin\ScheduleAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignupController;

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

Route::get('/', HomeController::class)->name('home');
Route::get('/cita', [AppointmentController::class, 'index'])->middleware('auth')->name('appointment.index');
Route::get('/cita/agendar', [AppointmentController::class, 'create'])->middleware('auth')->name('appointment.create');
Route::post('/cita/agendar', [AppointmentController::class, 'store'])->middleware('auth')->name('appointment.store');
Route::get('/cita/todas', [AppointmentController::class, 'show'])->middleware('auth')->name('appointment.show');
Route::get('/cita/{appointmentId}', [AppointmentController::class, 'showId'])->middleware('auth')->name('appointment.showId');
Route::delete('/cita/{id}', [AppointmentController::class, 'destroy'])->middleware('auth')->name('appointment.destroy');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->middleware('can:admin.index')->name('admin.index');
Route::resource('/admin/schedules', ScheduleAdminController::class)->middleware('auth')->names('admin.schedule');
Route::resource('/admin/appointment', AppointmentsAdminController::class)->middleware('auth')->names('admin.appointment');

Route::get('/login', [LoginController::class, 'show'])->name('auth.login');
Route::post('/login', [LoginController::class, 'store'])->name('auth.loginStore');
Route::get('/signup', [SignupController::class, 'show'])->name('auth.signup');
Route::post('/signup', [SignupController::class, 'store'])->name('auth.store');
Route::get('/logout', LogoutController::class)->name('auth.logout');
