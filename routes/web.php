<?php

use App\Http\Controllers\ProdutoController;
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

Route::get('/', function () {
    return view('home');
});

//Produtos
Route::get('/index-produtos', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/create-produtos', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/store-produtos', [ProdutoController::class, 'store'])->name('produto.store');