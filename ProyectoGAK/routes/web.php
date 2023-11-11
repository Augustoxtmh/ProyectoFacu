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

Route::get('', function () {
    return view('welcome');
})->name('login');

Route::get('/facturas', function () {
    return view('facturas');
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/pedidos', function () {
    return view('pedidos');
})->name('pedidos');

Route::get('/stock', function () {
    return view('stock');
})->name('stock');