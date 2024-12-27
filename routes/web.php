<?php
use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return view('home');
});
Route::get('/', [FrontController::class, 'index'])->name('home');

