<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('index');
});

Route::get('/boards', [BoardController::class, 'index'])->name('board.index');
# ->name('별칭')
# [BoardController::class, 'list'] : boardController의 list 함수 실행
Route::get('/boards/list', [BoardController::class, 'list'])->name('board.create');