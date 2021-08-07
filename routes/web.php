<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[LivroController::class,'home']);

Route::get('/livro/novo',[LivroController::class,'create']);
Route::post('/livro/novo',[LivroController::class,'store'])->name('registra_livro');
Route::get('/livro/ver/{id}',[LivroController::class,'show']);
Route::get('/livro/editar/{id}',[LivroController::class,'edit']);
Route::put('/livro/editar/{id}',[LivroController::class,'update'])->name('alterar_livro');
Route::get('/livro/excluir/{id}',[LivroController::class,'delete']);
Route::delete('/livro/excluir/{id}',[LivroController::class,'exluir'])->name('deletar_livro');
