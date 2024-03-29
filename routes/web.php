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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/livro', [App\Http\Controllers\LivroController::class, 'index']);
Route::get('/livro/{id}', [App\Http\Controllers\LivroController::class, 'verlivro']);
Route::get('/lerlivro', [App\Http\Controllers\LivroController::class, 'lerlivro']);
Route::get('/ouviraudio', [App\Http\Controllers\AudioController::class, 'ouviraudio']);
Route::post('/livro', [App\Http\Controllers\LivroController::class, 'add']);
Route::post('/autor', [App\Http\Controllers\AutorController::class, 'add']);
Route::get('/autor', [App\Http\Controllers\AutorController::class, 'index']);
//Route::get('/livro', [App\Http\Controllers\OuvirAudioController::class, 'index']);
Route::get('/atividadesALI', [App\Http\Controllers\AliController::class, 'index']);
Route::post('/atividadesALI', [App\Http\Controllers\AliController::class, 'add']);
Route::get('/ilustracoes', [App\Http\Controllers\IlustracaoController::class, 'index']);
Route::post('/ilustracoes', [App\Http\Controllers\IlustracaoController::class, 'add']);
Route::get('/tipoautores', [App\Http\Controllers\TipoAutorController::class, 'index']);
Route::post('/tipoautores', [App\Http\Controllers\TipoAutorController::class, 'add']);
Route::get('/pdf', [App\Http\Controllers\PDFController::class, 'index']);
Route::post('/pdf', [App\Http\Controllers\PDFController::class, 'add']);
Route::get('/audio', [App\Http\Controllers\AudioController::class, 'index']);
Route::post('/audio', [App\Http\Controllers\AudioController::class, 'add']);
Route::get('/premios', [App\Http\Controllers\PremioController::class, 'index']);
Route::post('/premios', [App\Http\Controllers\PremioController::class, 'add']);
Route::get('/apoios', [App\Http\Controllers\ApoioController::class, 'index']);
Route::post('/apoios', [App\Http\Controllers\ApoioController::class, 'add']);
Route::get('/vencedores', [App\Http\Controllers\VencedorController::class, 'index']);
Route::post('/vencedores', [App\Http\Controllers\VencedorController::class, 'add']);

Route::get('/teste', [App\Http\Controllers\LivroController::class, 'teste']);

Route::get('/teste/getAutoresLivro', [App\Http\Controllers\LivroController::class, 'testeAutLiv']);
Route::get('/teste/getLivrosAutor', [App\Http\Controllers\LivroController::class, 'testeLivAut']);
Route::get('/teste/addRandomLivro', [App\Http\Controllers\LivroController::class, 'addRandLivro']);