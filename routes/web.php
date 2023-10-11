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
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\DeleteController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/favoritos', [FavoritoController::class, 'showFavorites'])->name('favoritos');

Route::get('/historico', [HistoricoController::class, 'historico'])->name('historico');


Route::post('/atualizarFavorito/{endereco_id}', [FavoritoController::class, 'atualizarFavorito'])->name('atualizarFavorito');
Route::match(['get', 'post'], '/editar/{endereco_id}', [EditController::class, 'edit'])->name('editar');






Route::post('/atualizar/{endereco_id}', [EditController::class, 'atualizar'])->name('atualizar');
Route::post('/insertSearch', [EditController::class, 'insertSearch'])->name('insertSearch');
Route::get('/delete/{endereco_id}', [DeleteController::class, 'deletar'])->name('deleteUsuario');




