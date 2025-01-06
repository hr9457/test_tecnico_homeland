<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


// get view list productos
Route::get('/products', [ProductController::class,'listProducts']);
