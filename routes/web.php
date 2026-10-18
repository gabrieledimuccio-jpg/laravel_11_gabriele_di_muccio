<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'home'])->name('home');
Route::get('/articles/index', [ArticleController::class, 'index'])->name('index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('create')->middleware('auth');
Route::get('/articles/my-ricettario', [ArticleController::class, 'my_ricettario'])->name('my-ricettario')->middleware('auth');
Route::post('/articles', [ArticleController::class, 'store'])->name('store');

Route::get('/articles/show/{article}', [ArticleController::class, 'show'])->name('show');
Route::get('/articles/edit/{article}', [ArticleController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/articles/update/{article}', [ArticleController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('destroy')->middleware('auth');

