<?php

use App\Http\Controllers\BichinhosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BichinhosController::class, 'home'])->name('pages.home');
Route::get('/bichinhos', [BichinhosController::class, 'index'])->name('bichinhos.index');
Route::post('/bichinhos', [BichinhosController::class, 'store'])->name('bichinhos.store');
Route::get('/mural', [BichinhosController::class, 'mural'])->name('bichinhos.mural');
Route::get('/bichinhos/create', [BichinhosController::class, 'create'])->name('bichinhos.create');
Route::get('/bichinhos/{bichinho}', [BichinhosController::class, 'show'])->name('bichinhos.show');
Route::get('/bichinhos/{bichinho}/edit', [BichinhosController::class, 'edit'])->name('bichinhos.edit');
Route::put('/bichinhos/{bichinho}', [BichinhosController::class, 'update'])->name('bichinhos.update');
Route::delete('/bichinhos/{bichinho}', [BichinhosController::class, 'destroy'])->name('bichinhos.destroy');
