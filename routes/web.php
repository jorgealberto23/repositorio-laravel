<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;


Route::get('/',[CidadeController::class,'MostrarHome'])->name('home-cidade');
Route::get('/cadastro-cidade',[CidadeController::class,'MostrarCadastroCidade'])->name('show-cadastro-cidade');
Route::get('/lista-cidade',[CidadeController::class,'MostrarCidadeNome'])->name('lista-cidade');
Route::get('/altera-cidade/{id}',[CidadeController::class,'MostrarCidadeCodigo'])->name('show-altera-cidade');

//para cadastrar
Route::post('/cadastro-cidade',[CidadeController::class, 'CadastrarCidade'])->name('cadastra-cidade');

//Para deletar
Route::delete('/apaga-cidade/{id}',[CidadeController::class, 'Destroy'])->name('apaga-cidade');

//para alterar
Route::put('/altera-cidade/{id}',[CidadeController::class, 'Update'])->name('altera-cidade');
