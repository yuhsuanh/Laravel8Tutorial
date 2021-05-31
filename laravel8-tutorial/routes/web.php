<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShowProductaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// use http://127.0.0.1/test to show this return
Route::get('/test', function () {
	return 'Goodbye';
});

// use to ShowProductaController
// http://127.0.0.1/show
Route::get('/show/{productType?}', ShowProductaController::class);

// use to ProductController
// http://127.0.0.1/products
Route::resource('products', ProductController::class);

// use to ProductTypeController
// http://127.0.0.1/products_types
Route::resource('product_types', ProductTypeController::class);
