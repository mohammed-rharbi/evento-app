<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Models\event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboardCntroller;
use App\Http\Controllers\memberCntroller;
use App\Http\Controllers\organizerController;

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

Route::get('/dashboard', dashboardCntroller::class)->middleware(['auth', 'verified'])->name('dashboard');




Route::resource('organizer', organizerController::class )->middleware(['auth', 'role:organizer']);

Route::resource('member', memberCntroller::class )->middleware(['auth', 'role:member']);

Route::resource('events', EventController::class)->middleware(['auth', 'role:organizer']);

Route::resource('admin', AdminController::class)->middleware(['auth', 'role:admin']);

Route::resource('category', CategoryController::class)->middleware(['auth', 'role:admin']);


Route::put('/event/{id}/validate', [EventController::class, 'validateEvent'])
->name('event.validate')->middleware(['auth', 'role:admin']);

Route::put('/event/{id}/Unvalidate', [EventController::class, 'UnvalidateEvent'])
->name('event.Unvalidate')->middleware(['auth', 'role:admin']);

Route::get('/banned', [AdminController::class, 'banned'])->name('banned');


Route::GET('/reserve/{id}/confirm', [EventController::class, 'confirm'])->name('reserve.confirm');
Route::GET('event', [EventController::class, 'show_unvalidated'])->name('event.show_unvalidated');


Route::GET('admins', [AdminController::class, 'getAllusers'])->name('admins.getAllusers');
Route::GET('resrvations', [AdminController::class, 'getResrevtion'])->name('resrvations.getResrevtion');

Route::post('/reserv/{event}/book', [EventController::class, 'book'])
->name('reserv.book')->middleware(['auth', 'role:member']);


Route::delete('/ban/{id}', [AdminController::class, 'ban'])->name('ban.ban');
Route::put('/ban/{id}', [AdminController::class, 'unban'])->name('ban.unban');



Route::get('/search', [EventController::class, 'search'])->name('search');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
