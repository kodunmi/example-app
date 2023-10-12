<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/hello', function (Request $request) {
    return "hello world";
});

Route::get('/get-comma', function (Request $request) {
    return "hello world";
});

Route::get('/new-route', function (Request $request) {
    return "hello world";
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });

    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
    Route::get('/user/1', function () {
        // Uses first & second middleware...
    });
    Route::get('/user/{id}', function () {
        // Uses first & second middleware...
    });

    Route::get('/user/book/{id}', function () {
        // Uses first & second middleware...
    });

    Route::get('/user/shirt/{id}', function () {
        // Uses first & second middleware...
    });

    Route::get('/user/pen/{id}', function () {
        // Uses first & second middleware...
    });

    Route::get('/user/red/{id}', function () {
        // Uses first & second middleware...
    });
    Route::get('/user/blue/{id}', function () {
        // Uses first & second middleware...
    });
});


Route::put('/test', function () {
    return "hello world";
});
