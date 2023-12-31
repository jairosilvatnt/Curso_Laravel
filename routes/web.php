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

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.principal');
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'index'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

// -------ROTAS UTILIZANDO SISTEMAS DE CALLBACK------------
Route::get('/login', function (){ return 'Login';})->name('');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function (){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedores');
    Route::get('/produtos', function (){ return 'Produtos';})->name('app.produtos');
});



// ----------exercicio de redirecionamento de rotas-----------
// Route::get('/rota1', function(){
//     echo '<h1>Rota 1</h1>';
// })->name('site.rota1');

// Route::get('/rota2', function(){
//     return redirect()->route('site.rota1');
//     // echo '<h1>Rota 2</h1>';
// })->name('site.rota2');
// Route::redirect('/rota2','/rota1');

// ---------redirecionamento de rotas não existentes----------
Route::fallback(function (){
    echo 'A rota acessada não existe.<a href="'.route('site.principal').'"> Clique aqui</a> para voltar a pagina principal';
});

// -----------ROTAS COM RECEBIMENTOS DE PARAMETROS-----------------
Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'])->name('teste');
