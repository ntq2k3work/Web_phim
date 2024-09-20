<?php

use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/categories',[PageController::class,'category'])->name('categories');
