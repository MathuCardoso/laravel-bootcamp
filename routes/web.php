<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/curso', [CursoController::class, 'index'])
    ->name('curso.index');

Route::get('/cursos', [CursosController::class, 'index'])
    ->name('cursos.index');

Route::get('/contato', [ContatoController::class, 'index'])
    ->name('contato.index');

Route::resource('login', LoginController::class)->only(['index', 'store']);

Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout.index');

Route::get('/lesson', [LessonController::class, 'index'])
    ->name('lesson.index');
