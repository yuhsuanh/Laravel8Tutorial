<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// http://127.0.0.1/api/test   -> because it is in api.php file
Route::get('/test', function() {
    return 'Hello world';}
);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

