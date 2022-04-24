<?php

use App\Http\Controllers\Api\DeskController;
use App\Http\Controllers\Api\SearchDeleteController;
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
// Route::get('/desks', [DeskController::class, 'index']);
// Route::get('/desks/{id}', [DeskController::class, 'show']);

Route::apiResources([
    'desks' => DeskController::class,
]);
