<?php

use App\Http\Controllers\Frontcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Frontcontroller::class,'index'])->name('front.index');

Route::get('/jurusan', [Frontcontroller::class,'jurusan'])->name('front.jurusan');

Route::get('/details/{article:slug}', [Frontcontroller::class,'details'])->name('front.details');

Route::get('/category/{category:slug}', [Frontcontroller::class,'category'])->name('front.category');

Route::get('/author/{author:slug}', [Frontcontroller::class,'teacher'])->name('front.author');

Route::get('/search', [Frontcontroller::class,'search'])->name('front.search');