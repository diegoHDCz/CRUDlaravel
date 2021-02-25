<?php

use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class);


Route::prefix('/tarefas')->group(function(){
    Route::get('/',[TarefasController::class, 'list']); //listagem de tarefas,

    Route::get('/add', [TarefasController::class, 'add']); // tela de adicao de novas tarefas
    Route::post('/add',[TarefasController::class, 'addAction']); //acao de add novas tareas

    Route::get('/edit/{id}',[TarefasController::class, 'edit']); //tela de edicao
    Route::post('edit/{id}', [TarefasController::class, 'editAction']); //acao de editar

    Route::get('/delete/{id}',[TarefasController::class, 'del']); // acao de deletar

    Route::get('/marcar/{id}', [TarefasController::class, 'done']);
});


Route::prefix('/config')->group(function(){

    Route::get('/', [ConfigController::class, 'index']);

    Route::get('/info', 'ConfigController@info');
    Route::get('/permissoes', 'ConfigController@permissoes');

});

Route::fallback(function(){
    return view('404');
});
