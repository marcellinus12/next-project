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

Route::get('/', function () {
    return view('admin.main.index');
});


Route::get('/pos', function () {
    return view('pos.index');
});
Route::get('/admin/tambah-produk', function () {
    return view('admin.product.addProd');
});
Route::get('/admin/kategori', function () {
    return view('admin.category.index');
});
Route::get('/admin/pengguna', function () {
    return view('admin.users.index');
});
Route::get('/admin/produk', function () {
    return view('admin.product.index');
});
