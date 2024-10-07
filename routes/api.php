<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PageController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/posts', [PageController::class, 'allWorks']);
Route::get('/post-by-slug/{slug}', [PageController::class, 'postBySlug']);
Route::get('/tecnologie', [PageController::class, 'allTechnologies']);
Route::get('/post-by-tecnologies/{slug}', [PageController::class, 'postByTecnologies']);
Route::get('/tipi', [PageController::class, 'allTypes']);
Route::get('/post-by-types/{slug}', [PageController::class, 'postByTypes']);

