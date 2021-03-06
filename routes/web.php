<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsAndListsController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/lists', [ListController::class, 'getLists'])->name('getLists');
Route::post('/lists', [ListController::class, 'createList'])->name('createList');
Route::get('/list/{id}', [ListController::class, 'listDetails'])->name('listDetails');
Route::post('/list/{id}', [ListController::class, 'editList'])->name('editList');
Route::delete('/list/{id}', [ListController::class, 'deleteList'])->name('deleteList');
Route::get('/products', [ProductController::class, 'getProducts'])->name('getProducts');
Route::get('/product/{id}', [ProductController::class, 'getDetails'])->name('productDetails');
Route::get('/list/{listId}/product/{productId}', [ProductsAndListsController::class, 'getDetails'])->name('getDetails');
Route::put('/list/{listId}/product/{productId}', [ProductsAndListsController::class, 'addProductToList'])->name('addProductToList');
Route::post('/list/{listId}/product/{productId}', [ProductsAndListsController::class, 'editProductOnList'])->name('editProductOnList');
Route::delete('/list/{listId}/product/{productId}', [ProductsAndListsController::class, 'removeProductFromList'])->name('removeProductFromList');
