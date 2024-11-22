<?php

use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\FindTutorController;
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
    Route::prefix('feedback')->group(function () {
        Route::get('/', [FeedbackController::class, 'index'])->name('feedback.index');
        Route::get('detail/{id}', [FeedbackController::class, 'show'])->name('feedback.show');
    });
});

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});
// Route::get('/tblTutor', function () {
//     return view('client.tblTutor.tutor');
// });
Route::prefix('list-tutor')->group(function () {
    Route::get('/', [ListTutorController::class, 'index'])->name('list-tutor.index');
});
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
});

Route::prefix('find-tutor')->group(function () {
    Route::get('/index', [FindTutorController::class, 'index'])->name('find-tutor.index');
    Route::post('/store', [FindTutorController::class, 'store'])->name('find-tutor.store');
    // Route::get('/add', [GameController::class, 'showAddGame'])->name('admin.game.show_add');
});
