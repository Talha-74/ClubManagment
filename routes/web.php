<?php

use App\Http\Controllers\AddMenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index']);

// Add menu post route
Route::get('/menu', [AddMenuController::class, 'viewMenu']);
Route::get('/addform', [AddMenuController::class, 'create']);
Route::post('addmenu', [AddMenuController::class, 'add_menu'])->name('addmenu');

// Edit menu
Route::get('editmenu/{id}', [AddMenuController::class, 'editmenu'])->name('editmenu');
Route::post('updatemenu/{id}', [AddMenuController::class, 'updateMenu'])->name('updatemenu');

// Delete menu route
Route::get('deletemenu/{id}', [AddMenuController::class, 'destroy']);


// Menu-Items and related pages
Route::get('/menuitems', [MenuItemController::class, 'viewMenuItem']);
Route::get('/additem', [MenuItemController::class, 'create'])->name('additem');
Route::post('store', [MenuItemController::class, 'store'])->name('store');
Route::get('edititem/{id}', [MenuItemController::class, 'edit'])->name('edititem');
Route::put('updateitem/{id}', [MenuItemController::class, 'update'])->name('updateitem');
Route::get('deleteitem/{id}', [MenuItemController::class, 'destroy'])->name('deleteitem');

// Order Form and tables
Route::get('/order_form', [OrderController::class, 'create'])->name('order_form');
Route::post('/store_data', [OrderController::class, 'store'])->name('store_data');

Route::get('/store_success', function () {
    return view('store_success'); 
})->name('store_success');