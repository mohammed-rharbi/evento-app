<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Models\event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboardCntroller;
use App\Http\Controllers\memberCntroller;

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


Route::get('/organizer/dashboard', function () {
    return view('organizer.dashboard');
})->middleware(['auth', 'role:organizer'])->name('organizer.dashboard');





Route::resource('member', memberCntroller::class )->middleware(['auth', 'role:member']);

Route::resource('events', EventController::class)->middleware(['auth', 'role:organizer']);

Route::resource('admin', AdminController::class)->middleware(['auth', 'role:admin']);

Route::resource('category', CategoryController::class)->middleware(['auth', 'role:admin']);


Route::put('/event/{id}/validate', [EventController::class, 'validateEvent'])->name('event.validate')->middleware(['auth', 'role:admin']);

Route::post('/events/{event}/book', [EventController::class, 'book'])->name('events.book')->middleware(['auth', 'role:member']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
