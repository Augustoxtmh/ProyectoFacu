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

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/facturas', function () {
    return view('facturas');
});

Route::get('/stock', function() {
    return view('stock');
});

Route::get('/pedidos', function() {
    return view('pedidos');
});

Route::get('/agregar-pedido', function() {
    return view('agregar-pedido');
})->name('agregar-pedido');

Route::get('/borrar-pedido', function() {
    return view('borrar-pedido');
})->name('borrar-pedido');

Route::get('/modificar-pedido', function() {
    return view('modificar-pedido');
})->name('modificar-pedido');

Route::get('/agregar-stock', function() {
    return view('agregar-stock');
})->name('agregar-stock');

Route::get('/borrar-stock', function() {
    return view('borrar-stock');
})->name('borrar-stock');

Route::get('/modificar-stock', function() {
    return view('modificar-stock');
})->name('modificar-stock');