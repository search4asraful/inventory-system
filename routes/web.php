<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SaleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [AdminController::class, 'adminLoginFormShow'])->name('auth.login')->middleware('guest');

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/categories', [CategoryController::class, 'showCategories'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'categoryAddForm'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'categoryStore'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'showCategoryEdit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');
Route::get('/category/delete/{id}', [CategoryController::class, 'categoryDestroy'])->name('category.delete');

Route::get('/brands', [BrandController::class, 'showBrands'])->name('brand.index');
Route::get('/brand/create', [BrandController::class, 'brandAddForm'])->name('brand.create');
Route::post('/brand/store', [BrandController::class, 'brandStore'])->name('brand.store');
Route::get('/brand/edit/{id}', [BrandController::class, 'showBrandEdit'])->name('brand.edit');
Route::post('/brand/update/{id}', [BrandController::class, 'brandUpdate'])->name('brand.update');
Route::get('/brand/delete/{id}', [BrandController::class, 'brandDestroy'])->name('brand.delete');

Route::get('/products', [ProductController::class, 'showProductList'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'showProductForm'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'productStore'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'productUpdate'])->name('product.update');
Route::get('/product/delete/{id}', [ProductController::class, 'productDestroy'])->name('product.delete');

Route::get('/product/sales', [SaleController::class, 'productSales'])->name('sale.index');