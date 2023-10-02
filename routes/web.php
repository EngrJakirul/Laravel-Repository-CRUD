<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;



Route::get('/',[ProductController::class, 'index'])->name('home');
Route::get('/product-add',[ProductController::class, 'addProduct'])->name('product.add');
Route::post('/product-create',[ProductController::class, 'createProduct'])->name('product.create');
Route::get('/product-edit/{id}',[ProductController::class, 'editProduct'])->name('product.edit');
Route::post('/product-update/{id}',[ProductController::class, 'updateProduct'])->name('product.update');
Route::get('/product-manage',[ProductController::class, 'manageProduct'])->name('product.manage');
Route::delete('/product-delete/{id}',[ProductController::class, 'deleteProduct'])->name('product.delete');
Route::get('/product-detail/{id}',[ProductController::class, 'getSingleProduct'])->name('product.detail');



Route::get('/add-category',[CategoryController::class, 'index'])->name('category.add');
Route::post('/create-category',[CategoryController::class, 'createCategory'])->name('category.create');
Route::get('/delete-category/{id}',[CategoryController::class, 'deleteCategory'])->name('category.delete');
Route::get('/edit-category/{id}',[CategoryController::class, 'editCategory'])->name('category.edit');
Route::post('/update-category/{id}',[CategoryController::class, 'updateCategory'])->name('category.update');
Route::get('/manage-category',[CategoryController::class, 'manageCategory'])->name('category.manage');

Route::get('/add-user',[UserController::class, 'index'])->name('user.add');
Route::post('/create-user',[UserController::class, 'createUser'])->name('user.create');
Route::get('/edit-user/{id}',[UserController::class, 'editUser'])->name('user.edit');
Route::post('/update-user/{id}',[UserController::class, 'updateUser'])->name('user.update');
Route::get('/manage-user',[UserController::class, 'manageUser'])->name('user.manage');
Route::delete('/delete-user/{id}',[UserController::class, 'deleteUser'])->name('user.delete');

