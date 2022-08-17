<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/livro', [App\Http\Controllers\LivroController::class, 'index']);
Route::post('/livro', [App\Http\Controllers\LivroController::class, 'add']);
Route::post('/autor', [App\Http\Controllers\LerLivroController::class, 'add']);
Route::get('/livro', [App\Http\Controllers\OuvirAudioController::class, 'index']);
Route::get('/atividadesALI', [App\Http\Controllers\ALIController::class, 'index']);
Route::post('/atividadesALI', [App\Http\Controllers\ALIController::class, 'add']);
Route::get('/ilustracoes', [App\Http\Controllers\IlustracaoController::class, 'index']);
Route::post('/ilustracoes', [App\Http\Controllers\IlustracaoController::class, 'add']);
Route::get('/tipoautores', [App\Http\Controllers\TipoAutorController::class, 'index']);
Route::post('/tipoautores', [App\Http\Controllers\TipoAutorController::class, 'add']);
Route::get('/pdf', [App\Http\Controllers\PDFController::class, 'index']);
Route::post('/pdf', [App\Http\Controllers\PDFController::class, 'add']);
Route::get('/audio', [App\Http\Controllers\AudioController::class, 'index']);
Route::post('/audio', [App\Http\Controllers\AudioController::class, 'add']);