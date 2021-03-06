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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/client-test', function () {
//     return 'authenticated';
// })->middleware('client');

Route::middleware('auth:api')->prefix('v1')->group(function () {
    // Users
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Authors
    // Route::get('/authors', 'AuthorsController@index');
    // Route::get('/authors/{author}', 'AuthorsController@show');
    Route::apiResource('authors', 'AuthorsController');
});
