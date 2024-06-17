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

//Route::get('/cliente', [ClienteController::class, 'index']);

//Route::get('/pedido', [Pedido::class, 'index']);

Route::resource('cliente', ClienteController::class);
Route::resource('produto', ClienteController::class);

Route::get('/cadastro-cliente', [ClienteController::class, 'create'])->name('cliente.create');
Route::get('/produto-cliente', [ClienteController::class, 'create'])->name('produto.create');

Route::resource('user', UserController::class);

Route::get('/',[UserController::class,'login'])->name('login.page');
Route::post('/auth', [UserController::class,'auth'])->name('auth.user');

