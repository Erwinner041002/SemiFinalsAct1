<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroceryListController;

Route::get('/grocery', [GroceryListController::class, 'index'])->name('index');

Route::get('/grocery/addItem', [GroceryListController::class, 'create'])->name('addItem');

Route::post('/grocery/store', [GroceryListController::class, 'store'])->name('store');
