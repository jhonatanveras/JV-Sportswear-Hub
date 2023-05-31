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

use App\Http\Controllers\ProductController;

// Rota para exibir a lista de produtos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Rota para exibir o formulário de criação de produto
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Rota para armazenar um novo produto no banco de dados
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Rota para exibir os detalhes de um produto específico
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Rota para exibir o formulário de edição de um produto
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Rota para atualizar um produto no banco de dados
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Rota para excluir um produto do banco de dados
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Rota para pesquisar produtos
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
