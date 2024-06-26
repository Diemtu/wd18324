<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/test', function () {
    echo ('');
});

Route::get('/', function () {
    echo ('Trang chu');
});

Route::get('list-product',[ProductController::class, 'showProduct']);
Route::get('get-product/{id}',[ProductController::class,'getProduct']);
Route::get('update-product',[ProductController::class, 'updateProduct']);