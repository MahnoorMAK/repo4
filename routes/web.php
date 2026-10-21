<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('Pages.Home');})->name('Home');
Route::get('/Contact', function () {return view('Pages.Contact');})->name('Contact');
Route::get('/About', function () {return view('Pages.About');})->name('About');
Route::get('/Product', function () {return view('Pages.Product');})->name('Product');
Route::get('/Services', function () {return view('Pages.Services');})->name('Services');
