<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('index');
});

Route::get('/boards', [BoardController::class, 'index'])->name('board.index');

Route::get('/boards', [BoardController::class, 'create'])->name('board.create');