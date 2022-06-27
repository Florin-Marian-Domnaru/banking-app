<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;



Route::get('/', [TransactionController::class, 'index'])->name('index');

Route::get('/index', [TransactionController::class, 'index']);

Route::get('/edit', [TransactionController::class, 'edit']);

Route::get('/create', [TransactionController::class, 'create']);

Route::post('store', [TransactionController::class, 'store']);

Route::post('update',[TransactionController::class, 'update']);

Route::delete('/destroy/{transaction}',[TransactionController::class, 'destroy'])->name('destroy');


