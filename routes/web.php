<?php

use App\Http\Controllers\Admin\{FeedbackController};
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FeedbackController::class, 'index'])->name('feedback.index');

Route::get('/feedback/{unidade}', [FeedbackController::class, 'create'])->name('feedback.create');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');