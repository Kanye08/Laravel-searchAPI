<?php

use App\Http\Controllers\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [PostController::class, 'index']);

// post/create route
Route::post('/post', [PostController::class, 'store']);

// read route
Route::get('/posts/{id}', [PostController::class, 'show']);


// update route
Route::put('/posts/{id}', [PostController::class, 'update']);

// delete route
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

// search route
Route::get('/posts/search-book/{param}', [PostController::class, 'search']);