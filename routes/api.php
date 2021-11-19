<?php

use App\Http\Controllers\API\ClientController;
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
Route::get('clients', [ClientController::class, 'index']);
Route::post('/addclient', [ClientController::class, 'store']);
Route::get('/editclient/{id}', [ClientController::class, 'edit']);
Route::put('/updateclient/{id}', [ClientController::class, 'update']);
Route::delete('/deleteclient/{id}', [ClientController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
