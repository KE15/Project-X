<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


//add in

Route::get('/gudang', function () {
    return view('addin.gudang', [
        "title" => "gudang" 
    ]);
})->name('gudang');

Route::get('/bahan', function () {
    return view('addin.bahan', [
        "title" => "bahan" 
    ]);
})->name('bahan');

Route::get('/produk', function () {
    return view('addin.produk', [
        "title" => "produk" 
    ]);
})->name('produk');

//add in

//pembelian

Route::get('/prepurchase', function () {
    return view('pembelian.prepurchase', [
        "title" => "prepurchase" 
    ]);
})->name('prepurchase');

Route::get('/purchaseorder', function () {
    return view('pembelian.purchaseorder', [
        "title" => "purchaseorder" 
    ]);
})->name('purchaseorder');

Route::get('/pembelian', function () {
    return view('pembelian.pembelian', [
        "title" => "pembelian" 
    ]);
})->name('pembelian');