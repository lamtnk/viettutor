<?php

use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ListTutorController;
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

// Route::get('/', function () {
//     return view('admin.dashboard.index');
// });
Route::prefix('admin')->group(function () {
    Route::prefix('tutor')->group(function () {
        Route::get('/', [TutorController::class, 'index'])->name('tutor.index');
    });
});

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
});
// Route::get('/tblTutor', function () {
//     return view('client.tblTutor.tutor');
// });
Route::prefix('list-tutor')->group(function () {
    Route::get('/', [ListTutorController::class, 'index'])->name('list-tutor.index');
});
