<?php

use App\Http\Controllers\Cliente;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Pedido;
use App\Http\Controllers\UserController;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('inicial.home');
});

//Route::get('/cliente', [ClienteController::class, 'index']);

//Route::get('/pedido', [Pedido::class, 'index']);

Route::resource('cliente', ClienteController::class);
Route::resource('produto', ClienteController::class);

Route::get('/cadastro-cliente', [ClienteController::class, 'create'])->name('cliente.create');
Route::get('/editar-cliente/{id}/edit', [ClienteController::class, 'edit'])->where('id', '[0-9]+')->name('cliente.edit');
Route::put('/editar-cliente/{id}', [ClienteController::class, 'update'])->where('id', '[0-9]+')->name('cliente.update');
Route::delete('/deletar-cliente/{id}', [ClienteController::class, 'destroy'])->where('id', '[0-9]+')->name('cliente.destroy');



Route::get('/produto-cliente', [ClienteController::class, 'create'])->name('produto.create');

Route::resource('user', UserController::class);

Route::get('/',[UserController::class,'login'])->name('login.page');
Route::post('/auth', [UserController::class,'auth'])->name('auth.user');
