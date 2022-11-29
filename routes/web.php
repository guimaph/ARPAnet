<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\DashboardController;
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
//ROTA DO DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

//ROTA DE VENDAS
Route::get('/vendas', [VendaController::class, 'index'])->name('vendas.index');
Route::get('/vendas/create', [VendaController::class, 'create'])->name('vendas.create');
Route::post('/vendas', [VendaController::class, 'store'])->name('vendas.store');

//ROTA DE LOGIN
Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

//ROTA DE PRODUTOS
 Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
 Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
 Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');

 //ROTA DE PESSOAS
 Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas.index');
 Route::get('/pessoas/create', [PessoaController::class, 'create'])->name('pessoas.create');
 Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas.store');

//ROTAS USUARIOS
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::get('/welcome', function () {
    return view('welcome');
});


