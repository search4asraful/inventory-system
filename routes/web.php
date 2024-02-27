<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
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

Route::get('/', [AdminController::class, 'adminLoginFormShow'])->name('auth.login')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories', [CategoryController::class, 'showCategories'])->name('category.view');
Route::get('/category/create', [CategoryController::class, 'categoryAddForm'])->name('category.add');
Route::post('/category/store', [CategoryController::class, 'categoryStore'])->name('category.store');
Route::get('/category/edit', [CategoryController::class, 'showCategoryEdit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');
Route::get('/category/delete/{id}', [CategoryController::class, 'categoryDestroy'])->name('category.delete');

Route::get('/brands', [BrandController::class, 'showBrands'])->name('brand.view');
Route::get('/brand/create', [BrandController::class, 'brandAddForm'])->name('brand.add');
Route::post('/brand/store', [BrandController::class, 'brandStore'])->name('brand.store');
Route::get('/brand/edit', [BrandController::class, 'showBrandEdit'])->name('brand.edit');
Route::post('/brand/update/{id}', [BrandController::class, 'brandUpdate'])->name('brand.update');
Route::get('/brand/delete/{id}', [BrandController::class, 'brandDestroy'])->name('brand.delete');