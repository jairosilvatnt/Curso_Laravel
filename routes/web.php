<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// -----------ROTAS UTILIZANDO SISTEMAS DE CONTROLES -----------------
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/principal', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.principal');
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');

// -------ROTAS UTILIZANDO SISTEMAS DE CALLBACK------------
Route::get('/login', function (){ return 'Login';})->name('');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function (){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function (){ return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function (){ return 'Produtos';})->name('app.produtos');
});

Route::get('/rota1', function(){
    echo '<h1>Rota 1</h1>';
})->name('site.rota1');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
    // echo '<h1>Rota 2</h1>';
})->name('site.rota2');

// Route::redirect('/rota2','/rota1');
