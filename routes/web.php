<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/contas', function () {
    return view('contas');
})->name('contas');

Route::get('/configuracoes', function () {
    return view('configuracoes');
})->name('configuracoes');