<?php

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

Route::get('/', function () {
    return view('uvod');
})->name('uvod');

Route::get('kontakt', function () {
    return view('kontakt');
})->name('kontakt');

Route::get('sluzby', function () {
    return view('sluzby');
})->name('sluzby');

Route::get('preklady', function () {
    return view('preklady');
})->name('preklady');

Route::get('uradne-preklady', function () {
    return view('uradne-preklady');
})->name('uradne_preklady');

Route::get('tlmocenie', function () {
    return view('tlmocenie');
})->name('tlmocenie');

Route::get('grafika', function () {
    return view('grafika');
})->name('grafika');

Route::get('referencie', function () {
    return view('referencie');
})->name('referencie');
